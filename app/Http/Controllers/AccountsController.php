<?php

namespace App\Http\Controllers;

use App\Models\EmailVerificationsTableModel;
use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\SalesTableModel;
use App\Models\UserSitesTableModel;
use App\Models\UsersTableModel;
use Illuminate\Http\Request;
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

    public function accountDetail($id)
    {
        $account = UsersTableModel::find(Crypt::decrypt($id));
        $accountSites = UserSitesTableModel::where('user_id', $account->id)->where('is_delete', 0)->orderBy('created_at', 'DESC')->get();
        $accountLinks = PurchasedLinksTableModel::where('user_id', $account->id)->where('is_delete', 0)->orderBy('created_at', 'DESC')->get();

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
        $account = UsersTableModel::find($id);
        return view('Public.Accounts.edit-account', compact('account'));
    }

    public function updateAccount(Request $request)
    {

    }

    public function setAccountActivated(Request $request)
    {
        if (is_null($request->account_id)) {
            return abort(404);
        } else {
            $account = UsersTableModel::find($request->account_id);
            $getEmailVerification = EmailVerificationsTableModel::where('user_id',$request->account_id)->first();
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

}
