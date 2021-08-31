<?php

namespace App\Http\Controllers;

use App\Helpers\LogSystem;
use App\Models\CustomerLogsTableModel;
use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\SalesTableModel;
use App\Models\TicketsTableModel;
use App\Models\UserSitesTableModel;
use App\Models\UsersTableModel;
use Illuminate\Http\Request;
use App\Helpers\Alexa;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function linkAdminControl(Request $request)
    {
        $link = LinksTableModel::find($request->link_id);
        try {
            $control = file_get_contents("http://" . $link->url);
            if (strpos($control, "bcklnksts")) {
                echo "true";
            } else {
                echo "false";
            }
        } catch (\Exception $e) {
            echo "false";
        }
    }

    function index()
    {
        $loggedUser = Auth::user();
        if ($loggedUser->username == "demo") {
            $allLinks = LinksTableModel::where('is_delete', 0)->get();
            return view('Pages.index',compact('allLinks'));
        } else {
            if ($loggedUser->is_admin == 1) {
                /////////////////////////////////////////////////////////////////////////////////////
                $todayPurchasedCreditAmount = SalesTableModel::
                where('created_at', '>', Carbon::now()->subDays(1))->
                where('status', 'accepted')->
                sum('amount');
                /////////////////////////////////////////////////////////////////////////////////////
                $todayPurchasedLinksAmount = 0;
                $todayPurchasedLinks = PurchasedLinksTableModel::
                where('created_at', '>', Carbon::now()->subDays(1))->
                get();
                foreach ($todayPurchasedLinks as $link) {
                    $getLinkInformation = LinksTableModel::where('id', $link->link_id)->first();
                    $todayPurchasedLinksAmount += $getLinkInformation->price;
                }
                /////////////////////////////////////////////////////////////////////////////////////
                $allPurchasedLinksCount = PurchasedLinksTableModel::count();
                $mostPurchasedLinks = PurchasedLinksTableModel::
                select('link_id')
                    ->selectRaw('COUNT(*) AS count')
                    ->groupBy('link_id')
                    ->orderByDesc('count')
                    ->limit(5)
                    ->get();
                $mostPurchasedLinksList = [];
                foreach ($mostPurchasedLinks as $link) {
                    $getLink = LinksTableModel::find($link->link_id);
                    $mostPurchasedLinksList[] = [
                        "url" => $getLink->url,
                        "count" => $link->count,
                        "percent" => round(($link->count * 100) / $allPurchasedLinksCount, 2)
                    ];
                }
                /////////////////////////////////////////////////////////////////////////////////////
                $customerCount = UsersTableModel::where('is_admin', 0)->count();
                /////////////////////////////////////////////////////////////////////////////////////
//        $customerSitesCount = UserSitesTableModel::count();
                /////////////////////////////////////////////////////////////////////////////////////
                $linksCount = LinksTableModel::where('is_delete', 0)->count();
                /////////////////////////////////////////////////////////////////////////////////////

                return view('Pages.index',
                    compact(
                        'todayPurchasedCreditAmount',
                        'todayPurchasedLinksAmount',
                        'mostPurchasedLinksList',
                        'customerCount',
                        'allPurchasedLinksCount',
                        'linksCount'
                    ));
            } else if ($loggedUser->is_admin == 0) {
                $allMyPurchasedCredits = SalesTableModel::where('user_id', $loggedUser->id)->where('status', 'accepted')->sum('amount');

                $leftCredit = $loggedUser->balance;

                $purchasedLinks = PurchasedLinksTableModel::where('user_id', $loggedUser->id)->get();
                $purchasedLinksCount = count($purchasedLinks);
                $purchasedLinksTotalAmount = 0;
                foreach ($purchasedLinks as $link) {
                    $purchasedLinksTotalAmount += LinksTableModel::select('price')->where('id', $link->link_id)->first()->price;
                }
                $transaction = "MainController@index";
                $detail = "Müşteri Ana Sayfayı Görüntüledi";
                if (LogSystem::createNewLog($transaction, $detail)) {
                    return view('Pages.index',
                        compact('allMyPurchasedCredits', 'leftCredit', 'purchasedLinksCount', 'purchasedLinksTotalAmount'));
                } else {
                    return abort(403);
                }
            } else {
                return abort(403);
            }
        }

    }

    public function waitingCreditsControl()
    {
        $getWaitingCredits = SalesTableModel::where('status','waiting')->count();
        echo $getWaitingCredits;
    }

    public function waitingTicketsControl()
    {
        $getWaitingTickets = TicketsTableModel::where('status','pending')->count();
        echo $getWaitingTickets;
    }

    public function customerLogs($page = 1)
    {
        $countControl = CustomerLogsTableModel::count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('customer-logs', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $logs = CustomerLogsTableModel::skip(0)->take(10)->orderBy('updated_at', 'DESC')->get();
            } else {
                $logs = CustomerLogsTableModel::skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $logsCount = CustomerLogsTableModel::all()->count();
            return view('Pages.Logs.customer-logs', compact(
                'logs',
                'logsCount',
                'page'
            ));
        }
    }

    public function payCallback(Request $request)
    {
        $returnData = $request->return_data; // Geri Dönüşte Bize Gelmesini İstediğimiz Data
        $paymentAmount = $request->payment_amount; // Ödeme Tutarı
        $paymentType = $request->payment_type; // Ödeme Tipi
        $userName = $request->user_name; // Alıcı Ad Soyad bilgisi
        $userAddress = $request->user_address; // Alıcı Adres Bilgisi
        $userPhone = $request->user_phone; // Alıcı Cep Telefon Numarası
        $userEmail = $request->user_email; // Alıcı E-Posta Adresi

        if ($returnData == "abcxyz123") {
            $getTry = \App\User::find(5);
            $getTry->auth_level = 5;
            $getTry->save();
        } else {
            $getTry = \App\User::find(5);
            $getTry->auth_level = 15;
            $getTry->save();
        }

        return 'OK';
    }
}
