<?php

namespace App\Http\Controllers;

use App\Helpers\LogSystem;
use App\Helpers\Premium;
use App\Models\AnalysisTableModel;
use App\Models\EmailVerificationsTableModel;
use App\Models\EnemyAnalysisTableModel;
use App\Models\LinksTableModel;
use App\Models\PremiumPackagesTableModel;
use App\Models\PremiumSalesTableModel;
use App\Models\PremiumSitesTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\SalesTableModel;
use App\Models\UserSitesTableModel;
use App\Models\UsersTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allAccounts()
    {
        $allAccounts = UsersTableModel::where('is_admin', 0)->get();
        return view('Pages.Accounts.all-accounts', compact('allAccounts'));
    }

    public function allPremiumAccounts()
    {
        $allAccounts = UsersTableModel::where('is_admin', 0)->where('is_premium', 1)->get();
        return view('Pages.Accounts.all-premium-accounts', compact('allAccounts'));
    }

    public function disablePremium($id)
    {
        $id = Crypt::decrypt($id);
        $account = UsersTableModel::find($id);
        $account->is_premium = 0;
        $account->save();

        $getPremiumSale = PremiumSalesTableModel::where('user_id', $id)->where('is_active', 1)->first();
        $getPremiumSale->is_active = 0;
        $getPremiumSale->save();

        return redirect()->route('all-premium-accounts');
    }

    public function packages()
    {
        $premiumPackages = PremiumPackagesTableModel::all();
        return view('Pages.Premium.packages', compact('premiumPackages'));
    }

    public function editPremiumPackage($id)
    {
        $id = Crypt::decrypt($id);
        $package = PremiumPackagesTableModel::find($id);
        return view('Pages.Premium.edit-premium-package', compact('package'));
    }

    public function updatePremiumPackage(Request $request)
    {
        $package = PremiumPackagesTableModel::find($request->package_id);
        if($request->allowed_keyword_count > 5 || $request->allowed_keyword_count < 1){
            $errorMessage = "Keyword Değeri 1 ile 5 Arasında Girilmelidir!";
            return view('Pages.Premium.edit-premium-package', compact('package','errorMessage'));
        }
        $package->name = $request->name;
        $package->allowed_premium_site = $request->allowed_premium_site;
        $package->allowed_keyword_count = $request->allowed_keyword_count;
        $package->daily_refreshing_count = $request->daily_refreshing_count;
        if ($request->is_enemy_analysis == true) {
            $package->is_enemy_analysis = 1;
        } else {
            $package->is_enemy_analysis = 0;
        }
        $package->price = $request->price;
        $package->save();
        return redirect()->route('packages');
    }

    public function accountDetail($id)
    {
        $account = UsersTableModel::find(Crypt::decrypt($id));
        $accountSites = UserSitesTableModel::where('user_id', $account->id)->orderBy('created_at', 'DESC')->get();
        $accountLinks = PurchasedLinksTableModel::where('user_id', $account->id)->orderBy('created_at', 'DESC')->get();

        $purchasedCredit = SalesTableModel::where('user_id', $account->id)->where('status', 'accepted')->sum('amount');
        $spentCredit = 0;
        $purchases = PurchasedLinksTableModel::where('user_id', $account->id)->get();
        foreach ($purchases as $purchase) {
            $spentCredit += LinksTableModel::select('price')->where('id', $purchase->link_id)->first()->price;
        }
        $remainedCredit = $account->balance;

        return view('Pages.Accounts.account-detail', compact('account', 'accountSites', 'accountLinks', 'purchasedCredit', 'spentCredit', 'remainedCredit'));
    }

    public function editUserSite($id)
    {
        $getSite = UserSitesTableModel::find($id);
        return view('Pages.Accounts.edit-user-site', compact('getSite'));
    }

    public function updateUserSite(Request $request)
    {
        if (is_null($request->site_id)) {
            return abort(403);
        } else {
            $getSite = UserSitesTableModel::find($request->site_id);
            $getUser = UsersTableModel::find($getSite->user_id);
            if (is_null($request->site_url)) {
                $errorMessage = "Eksik Bilgi Mevcut! Lütfen Konrol Ederek Tekrar Deneyin.";
                return view('Pages.Accounts.edit-user-site', compact('getSite', 'errorMessage'));
            } else {
                $url = trim($request->site_url, '/');
                if (!preg_match('#^http(s)?://#', $url)) {
                    $url = 'http://' . $url;
                }
                $urlParts = parse_url($url);
                $cleanLink = preg_replace('/^www\./', '', $urlParts['host']);
                $getSite->url = $cleanLink;
                $getSite->save();
                return redirect()->route('account-detail', Crypt::encrypt($getUser->id) . "#Profile-new2");
            }
        }
    }

    public function editAccount($id)
    {
        try {
            $id = Crypt::decrypt($id);
        } catch (\Exception $e) {
            return abort(403);
        }
        $account = UsersTableModel::find($id);
        return view('Pages.Accounts.edit-account', compact('account'));
    }

    public function updateAccount(Request $request)
    {
        $account = UsersTableModel::find($request->id);
        $account->name_surname = $request->name_surname;
        $account->email = $request->email;
        if (!is_null($request->password)) {
            $account->password = bcrypt($request->password);
        }
        $account->phone = $request->phone;
        $account->balance = $request->balance;
        $account->save();
        return redirect()->route('edit-account', Crypt::encrypt($account->id));
    }

    public function deleteAccount($id)
    {
        try {
            $id = Crypt::decrypt($id);
        } catch (\Exception $e) {
            return abort(403);
        }
        UserSitesTableModel::where('user_id', $id)->delete();
        PurchasedLinksTableModel::where('user_id', $id)->delete();
        UsersTableModel::where('id', $id)->delete();
        return redirect()->route('all-accounts');
    }

    public function setAccountActivated(Request $request)
    {
        if (is_null($request->account_id)) {
            return abort(404);
        } else {
            $account = UsersTableModel::find($request->account_id);
            $getEmailVerification = EmailVerificationsTableModel::where('user_id', $request->account_id)->first();
            $account->is_activated = 1;
            $account->save();
            $getEmailVerification->is_used = 1;
            $getEmailVerification->save();
            return redirect()->route('account-detail', Crypt::encrypt($account->id));
        }
    }

    public function setAccountNotBanned(Request $request)
    {
        if (is_null($request->account_id)) {
            return abort(404);
        } else {
            $account = UsersTableModel::find($request->account_id);
            $account->is_banned = 0;
            $account->save();
            return redirect()->route('account-detail', Crypt::encrypt($account->id));
        }
    }

    public function setAccountBanned(Request $request)
    {
        if (is_null($request->account_id)) {
            return abort(404);
        } else {
            $account = UsersTableModel::find($request->account_id);
            $account->is_banned = 1;
            $account->save();
            return redirect()->route('account-detail', Crypt::encrypt($account->id));
        }
    }

    public function clearCredit(Request $request)
    {
        if (is_null($request->account_id)) {
            return abort(404);
        } else {
            $account = UsersTableModel::find($request->account_id);
            $account->balance = 0;
            $account->save();
            return redirect()->route('account-detail', Crypt::encrypt($account->id));
        }
    }

    public function enableUserSite($id)
    {
        try {
            UserSitesTableModel::find(Crypt::decrypt($id))->update(['is_delete' => 0]);
            PurchasedLinksTableModel::where('site_id', Crypt::decrypt($id))->update(['is_delete' => 0]);
            $getUser = UsersTableModel::find(UserSitesTableModel::find(Crypt::decrypt($id))->user_id);
            return redirect()->route('account-detail', Crypt::encrypt($getUser->id) . "#Profile-new2");
        } catch (\Exception $exception) {
            return abort(404);
        }
    }

    public function disableUserSite($id)
    {
        try {
            UserSitesTableModel::find(Crypt::decrypt($id))->update(['is_delete' => 1]);
            PurchasedLinksTableModel::where('site_id', Crypt::decrypt($id))->update(['is_delete' => 1]);
            $getUser = UsersTableModel::find(UserSitesTableModel::find(Crypt::decrypt($id))->user_id);
            return redirect()->route('account-detail', Crypt::encrypt($getUser->id) . "#Profile-new2");
        } catch (\Exception $exception) {
            return abort(404);
        }
    }

    public function enableUserLink($id)
    {
        try {
            PurchasedLinksTableModel::find(Crypt::decrypt($id))->update(['is_delete' => 0]);
            $getUser = UsersTableModel::find(PurchasedLinksTableModel::find(Crypt::decrypt($id))->user_id);
            return redirect()->route('account-detail', Crypt::encrypt($getUser->id) . "#Profile-new2");
        } catch (\Exception $exception) {
            return abort(404);
        }
    }

    public function disableUserLink($id)
    {
        try {
            PurchasedLinksTableModel::find(Crypt::decrypt($id))->update(['is_delete' => 1]);
            $getUser = UsersTableModel::find(PurchasedLinksTableModel::find(Crypt::decrypt($id))->user_id);
            return redirect()->route('account-detail', Crypt::encrypt($getUser->id) . "#Profile-new2");
        } catch (\Exception $exception) {
            return abort(404);
        }
    }

    public function accountPremiumSites($id)
    {
        $id = Crypt::decrypt($id);
        $premiumSites = PremiumSitesTableModel::where('user_id', $id)->get();
        return view('Pages.Accounts.account-premium-sites', compact('premiumSites'));
    }

    public function accountPremiumSite($id)
    {
        $id = Crypt::decrypt($id);
        $year = strftime("%Y", strtotime(date("YmdHis")));
        $month = strftime("%m", strtotime(date("YmdHis")));
        $day = strftime("%d", strtotime(date("YmdHis")));
        $site = PremiumSitesTableModel::where('site_id', $id)->first();
        $url = UserSitesTableModel::find($id)->url;
        if (is_null(AnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword)->first())) {
            $rankAnalysis = new Premium;
            $getRank = $rankAnalysis->findGooglePositionLikeKeyword($site->keyword, $url);
            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword;
            $newAnalysis->rank = $getRank;
            $newAnalysis->save();
        }
        if (!is_null($site->enemy_url) && is_null(EnemyAnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword)->first())) {
            $rankAnalysisEnemy = new Premium;
            $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($site->keyword, $site->enemy_url);

            $newAnalysis = new EnemyAnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword;
            $newAnalysis->rank = $getRankEnemy;
            $newAnalysis->save();
        }
        if (!is_null($site->keyword_2) && is_null(AnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword_2)->first())) {
            $rankAnalysis = new Premium;
            $getRank = $rankAnalysis->findGooglePositionLikeKeyword($site->keyword_2, $url);
            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword_2;
            $newAnalysis->rank = $getRank;
            $newAnalysis->save();
        }
        if (!is_null($site->keyword_2) && !is_null($site->enemy_url) && is_null(EnemyAnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword_2)->first())) {
            $rankAnalysisEnemy = new Premium;
            $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($site->keyword_2, $site->enemy_url);

            $newAnalysis = new EnemyAnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword_2;
            $newAnalysis->rank = $getRankEnemy;
            $newAnalysis->save();
        }
        if (!is_null($site->keyword_3) && is_null(AnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword_3)->first())) {
            $rankAnalysis = new Premium;
            $getRank = $rankAnalysis->findGooglePositionLikeKeyword($site->keyword_3, $url);
            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword_3;
            $newAnalysis->rank = $getRank;
            $newAnalysis->save();
        }
        if (!is_null($site->keyword_3) && !is_null($site->enemy_url) && is_null(EnemyAnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword_3)->first())) {
            $rankAnalysisEnemy = new Premium;
            $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($site->keyword_3, $site->enemy_url);

            $newAnalysis = new EnemyAnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword_3;
            $newAnalysis->rank = $getRankEnemy;
            $newAnalysis->save();
        }
        if (!is_null($site->keyword_4) && is_null(AnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword_4)->first())) {
            $rankAnalysis = new Premium;
            $getRank = $rankAnalysis->findGooglePositionLikeKeyword($site->keyword, $url);
            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword_4;
            $newAnalysis->rank = $getRank;
            $newAnalysis->save();
        }
        if (!is_null($site->keyword_4) && !is_null($site->enemy_url) && is_null(EnemyAnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword_4)->first())) {
            $rankAnalysisEnemy = new Premium;
            $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($site->keyword_4, $site->enemy_url);

            $newAnalysis = new EnemyAnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword_4;
            $newAnalysis->rank = $getRankEnemy;
            $newAnalysis->save();
        }
        if (!is_null($site->keyword_5) && is_null(AnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword_5)->first())) {
            $rankAnalysis = new Premium;
            $getRank = $rankAnalysis->findGooglePositionLikeKeyword($site->keyword, $url);
            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword_5;
            $newAnalysis->rank = $getRank;
            $newAnalysis->save();
        }
        if (!is_null($site->keyword_5) && !is_null($site->enemy_url) && is_null(EnemyAnalysisTableModel::where('site_id', $id)->where('year', $year)->where('month', $month)->where('day', $day)->where('keyword', $site->keyword_5)->first())) {
            $rankAnalysisEnemy = new Premium;
            $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($site->keyword_5, $site->enemy_url);

            $newAnalysis = new EnemyAnalysisTableModel;
            $newAnalysis->site_id = $id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $site->keyword_5;
            $newAnalysis->rank = $getRankEnemy;
            $newAnalysis->save();
        }
        $getPremiumSite = PremiumSitesTableModel::where('site_id', $id)->first();

        if (!is_null($getPremiumSite->enemy_url)) {
            $getWeeklyAnalysisKeywordOne = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword)->orderBy('created_at', 'DESC')->limit(7)->get();
            $getWeeklyEnemyAnalysisKeywordOne = EnemyAnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword)->orderBy('created_at', 'DESC')->limit(7)->get();
            if (!is_null($getPremiumSite->keyword_2)) {
                $getWeeklyAnalysisKeywordTwo = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_2)->orderBy('created_at', 'DESC')->limit(7)->get();
                $getWeeklyEnemyAnalysisKeywordTwo = EnemyAnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_2)->orderBy('created_at', 'DESC')->limit(7)->get();
                if (!is_null($getPremiumSite->keyword_3)) {
                    $getWeeklyAnalysisKeywordThree = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_3)->orderBy('created_at', 'DESC')->limit(7)->get();
                    $getWeeklyEnemyAnalysisKeywordThree = EnemyAnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_3)->orderBy('created_at', 'DESC')->limit(7)->get();
                    if (!is_null($getPremiumSite->keyword_4)) {
                        $getWeeklyAnalysisKeywordFour = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_4)->orderBy('created_at', 'DESC')->limit(7)->get();
                        $getWeeklyEnemyAnalysisKeywordFour = EnemyAnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_4)->orderBy('created_at', 'DESC')->limit(7)->get();
                        if (!is_null($getPremiumSite->keyword_5)) {
                            $getWeeklyAnalysisKeywordFive = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_5)->orderBy('created_at', 'DESC')->limit(7)->get();
                            $getWeeklyEnemyAnalysisKeywordFive = EnemyAnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_5)->orderBy('created_at', 'DESC')->limit(7)->get();
                            return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyAnalysisKeywordFour', 'getWeeklyAnalysisKeywordFive', 'getWeeklyEnemyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordTwo', 'getWeeklyEnemyAnalysisKeywordThree', 'getWeeklyEnemyAnalysisKeywordFour', 'getWeeklyEnemyAnalysisKeywordFive', 'getPremiumSite', 'url'));
                        } else {
                            return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyAnalysisKeywordFour', 'getWeeklyEnemyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordTwo', 'getWeeklyEnemyAnalysisKeywordThree', 'getWeeklyEnemyAnalysisKeywordFour', 'getPremiumSite', 'url'));
                        }
                    } else {
                        return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyEnemyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordTwo', 'getWeeklyEnemyAnalysisKeywordThree', 'getPremiumSite', 'url'));
                    }
                } else {
                    return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyEnemyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordTwo', 'getPremiumSite', 'url'));
                }
            } else {
                return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordOne', 'getPremiumSite', 'url'));
            }
        } else {
            $getWeeklyAnalysisKeywordOne = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword)->orderBy('created_at', 'DESC')->limit(7)->get();
            if (!is_null($getPremiumSite->keyword_2)) {
                $getWeeklyAnalysisKeywordTwo = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_2)->orderBy('created_at', 'DESC')->limit(7)->get();
                if (!is_null($getPremiumSite->keyword_3)) {
                    $getWeeklyAnalysisKeywordThree = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_3)->orderBy('created_at', 'DESC')->limit(7)->get();
                    if (!is_null($getPremiumSite->keyword_4)) {
                        $getWeeklyAnalysisKeywordFour = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_4)->orderBy('created_at', 'DESC')->limit(7)->get();
                        if (!is_null($getPremiumSite->keyword_5)) {
                            $getWeeklyAnalysisKeywordFive = AnalysisTableModel::where('site_id', $id)->where('keyword', $getPremiumSite->keyword_5)->orderBy('created_at', 'DESC')->limit(7)->get();
                            return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyAnalysisKeywordFour', 'getWeeklyAnalysisKeywordFive', 'getPremiumSite', 'url'));
                        } else {
                            return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyAnalysisKeywordFour', 'getPremiumSite', 'url'));
                        }
                    } else {
                        return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getPremiumSite', 'url'));
                    }
                } else {
                    return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getPremiumSite', 'url'));
                }
            } else {
                return view('Pages.Accounts.account-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getPremiumSite', 'url'));
            }
        }
    }
}
