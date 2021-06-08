<?php

namespace App\Http\Controllers;

use App\Helpers\Alexa;
use App\Helpers\LogSystem;
use App\Helpers\Premium;
use App\IntroductionPurchase;
use App\IntroductionSalesTableModel;
use App\IntroductionSite;
use App\Models\AnalysisTableModel;
use App\Models\EnemyAnalysisTableModel;
use App\Models\LinksTableModel;
use App\Models\PremiumPackagesTableModel;
use App\Models\PremiumSalesTableModel;
use App\Models\PremiumSitesTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\SalesTableModel;
use App\Models\TicketMessagesTableModel;
use App\Models\TicketsTableModel;
use App\Models\UserSitesTableModel;
use App\Models\UsersTableModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;


class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myAccount()
    {
        $transaction = "CustomerController@myAccount";
        $detail = "Müşteri Profil Sayfasını Görüntüledi";
        LogSystem::createNewLog($transaction, $detail);
        return view('Pages.Customers.my-account');
    }

    public function mySites()
    {
        $transaction = "CustomerController@mySites";
        $detail = "Müşteri Kendi Sitelerini Görüntüledi";
        LogSystem::createNewLog($transaction, $detail);
        $user = Auth::user();
        $mySites = UserSitesTableModel::where('user_id', $user->id)->where('is_delete', 0)->get();
        return view('Pages.Customers.my-sites', compact('mySites'));
    }

    public function deleteSite($id)
    {
        $deletedSite = UserSitesTableModel::find($id);

        $transaction = "CustomerController@deleteSite";
        $detail = "Müşteri Kendi Sitesini Sildi. Sildiği Site URL : " . $deletedSite->url;
        LogSystem::createNewLog($transaction, $detail);

        $deletedSite->delete();


        PurchasedLinksTableModel::where('site_id', $id)->delete();

        return redirect()->route('my-sites');
    }

    public function addSite()
    {
        $transaction = "CustomerController@addSite";
        $detail = "Müşteri Yeni Site Ekleme Formunu Açtı";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.add-site');
    }

    public function addSiteControl(Request $request)
    {
        if (
        is_null($request->site_url)
        ) {
            $errorMessage = "Eksik Bilgiler Mevcut! Lütfen Kontrol Ederek Tekrar Deneyin.";
            return view('Pages.Customers.add-site', compact('errorMessage'));
        } else {
            $url = trim($request->site_url, '/');
            if (!preg_match('#^http(s)?://#', $url)) {
                $url = 'http://' . $url;
            }
            $urlParts = parse_url($url);
            $lastUrl = preg_replace('/^www\./', '', $urlParts['host']);
            if (UserSitesTableModel::where('url', $lastUrl)->count() > 0) {
                $errorMessage = "Bu Site Sistemde Zaten Mevcut. Lütfen Kontrol Ederek Tekrar Deneyin!";
                return view('Pages.Customers.add-site', compact('errorMessage'));
            } else {
                $returnArray = [
                    "url" => $lastUrl,
                    "status" => true
                ];

                $transaction = "CustomerController@addSiteControl";
                $detail = "Müşteri '" . $lastUrl . "' Sitesinin Eklenebilirliğini Kontrol Etti";
                LogSystem::createNewLog($transaction, $detail);

                return view('Pages.Customers.add-site', compact('returnArray'));
            }
        }

    }

    public function addSitePost(Request $request)
    {
        if (is_null($request->site_url)) {
            $errorMessage = "Bir Hata Oluştu. Lütfen Bir Süre Sonra Tekrar Deneyin!";
            return view('Pages.Customers.add-site', compact('errorMessage'));
        } else {
            $user = Auth::user();
            $newSite = new UserSitesTableModel;
            $newSite->url = $request->site_url;
            $newSite->user_id = $user->id;
            if ($request->http_status == 1) {
                $newSite->is_https = 1;
            }
            if ($request->is_www == 1) {
                $newSite->is_www = 1;
            }
            $newSite->save();

            $transaction = "CustomerController@addSitePost";
            $detail = "Müşteri '" . $request->site_url . "' Sitesini Ekledi";
            LogSystem::createNewLog($transaction, $detail);

            return redirect()->route('my-sites');
        }
    }

    public function editSite($id)
    {
        $getSite = UserSitesTableModel::find($id);

        $transaction = "CustomerController@editSite";
        $detail = "Müşteri '" . $getSite->url . "' Sitesini Düzenleme Sayfasını Açtı";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.edit-site', compact('getSite'));
    }

    public function updateSite(Request $request)
    {
        if (is_null($request->site_id)) {
            return abort(403);
        } else {
            $getSite = UserSitesTableModel::find($request->site_id);
            $before = $getSite->url;
            if (is_null($request->site_url)) {
                $errorMessage = "Eksik Bilgi Mevcut! Lütfen Konrol Ederek Tekrar Deneyin.";
                return view('Pages.Customers.edit-site', compact('getSite', 'errorMessage'));
            } else {
                $getSite->url = $request->site_url;
                if ($request->http_status == 1) {
                    $getSite->is_https = 1;
                } else {
                    $getSite->is_https = 0;
                }
                if ($request->is_www == 1) {
                    $getSite->is_www = 1;
                } else {
                    $getSite->is_www = 0;
                }
                $getSite->save();

                $transaction = "CustomerController@updateSite";
                $detail = "Müşteri '" . $before . "' Sitesini " . $request->site_url . " Olarak Güncelledi";
                LogSystem::createNewLog($transaction, $detail);

                return redirect()->route('my-sites');
            }
        }
    }

    public function myLinks()
    {
        $user = Auth::user();
        $purchasedLinks = PurchasedLinksTableModel::where('user_id', $user->id)->get();
        $returnArray = [];
        foreach ($purchasedLinks as $purchasedLink) {
            $getLink = LinksTableModel::select('url')->where('id', $purchasedLink->link_id)->first();
            $getSite = UserSitesTableModel::select('url')->where('id', $purchasedLink->site_id)->first();
            $returnArray[] = [
                "purchase_id" => $purchasedLink->id,
                "site_url" => $getSite->url,
                "link_url" => $getLink->url,
                "keywords" => $purchasedLink->keyword,
                "is_added" => $purchasedLink->is_added
            ];
        }

        $transaction = "CustomerController@myLinks";
        $detail = "Müşteri Satın Aldığı Linkleri Görüntüledi";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.my-links', compact('returnArray'));
    }

    public function editLink($id)
    {
        $getPurchasedLink = PurchasedLinksTableModel::find($id);
        $getSite = LinksTableModel::find($getPurchasedLink->link_id);

        $transaction = "CustomerController@editLink";
        $detail = "Müşteri '" . $getSite->url . "' Sitesinden Aldığı Linki Düzenleme Sayfasını Açtı";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.edit-link', compact('getPurchasedLink', 'getSite'));
    }

    public function updateLink(Request $request)
    {
        if (is_null($request->purchase_id)) {
            return abort(404);
        } else if (is_null($request->keyword)) {
            $errorMessage = "Eksik Bilgiler Mevcut! Lütfen Kotrol Ederek Tekrar Deneyin.";
            $getPurchasedLink = PurchasedLinksTableModel::find($request->purchase_id);
            return view('Pages.Customers.edit-link', compact('getPurchasedLink', 'errorMessage'));
        } else {
            $getPurchase = PurchasedLinksTableModel::find($request->purchase_id);
            $getPurchase->keyword = $request->keyword;
            $getPurchase->save();

            $getSite = LinksTableModel::find($getPurchase->link_id);

            $transaction = "CustomerController@updateLink";
            $detail = "Müşteri '" . $getSite->url . "' Sitesinden Aldığı Linkin Kelimelerini '" . $request->keyword . "' Olarak Güncelledi";
            LogSystem::createNewLog($transaction, $detail);

            return redirect()->route('my-links');
        }
    }

    public function deleteLink($id)
    {
        PurchasedLinksTableModel::find($id)->delete();
        return redirect()->route('my-links');
    }

    public function linkControl(Request $request)
    {
        $purchasedLink = PurchasedLinksTableModel::find($request->purchase_id);
        $getLink = LinksTableModel::select('url')->where('id', $purchasedLink->link_id)->first();
        $getSite = UserSitesTableModel::select('url')->where('id', $purchasedLink->site_id)->first();
        try {
            $control = file_get_contents("http://" . $getLink->url);
            if (strpos($control, $getSite->url)) {
                echo "true";
            } else {
                echo "false";
            }
        } catch (\Exception $e) {
            echo "false";
        }
    }

    public function allLinks()
    {
        $allLinks = LinksTableModel::where('is_delete', 0)->get();

        $transaction = "CustomerController@allLinks";
        $detail = "Müşteri Tüm Linkler Sayfasını Görüntüledi";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.all-links', compact('allLinks'));
    }

    public function buyLink($id)
    {
        $user = Auth::user();
        $link = LinksTableModel::where('id', $id)->first();
        $mySites = UserSitesTableModel::where('user_id', $user->id)->get();

        $transaction = "CustomerController@buyLink";
        $detail = "Müşteri '" . $link->url . "' Sitesinden Link Alma Ekranını Görüntüledi";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.buy-link', compact('mySites', 'link'));
    }

    public function buyLinkBatch($id)
    {
        $user = Auth::user();
        $link = LinksTableModel::where('id', $id)->first();
        $mySites = UserSitesTableModel::where('user_id', $user->id)->get();

        $transaction = "CustomerController@buyLink";
        $detail = "Müşteri '" . $link->url . "' Sitesinden Link Alma Ekranını Görüntüledi";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.buy-link-batch', compact('mySites', 'link'));
    }

    public function buyLinkPost(Request $request)
    {
        $user = Auth::user();
        $link = LinksTableModel::where('id', $request->link_id)->first();
        $purchaseControl = PurchasedLinksTableModel::
        where('site_id', $request->site_id)->
        where('link_id', $request->link_id)->
        where('user_id', $user->id)->
        first();

        if (is_null($purchaseControl)) {
            $newPurchase = new PurchasedLinksTableModel;
            $newPurchase->site_id = $request->site_id;
            $newPurchase->user_id = $user->id;
            $newPurchase->link_id = $link->id;
            $newPurchase->keyword = $request->keywords;
            if ($link->add_type == 1) {
                $newPurchase->is_added = 1;
            } else {
                $newPurchase->is_added = 0;
            }
            $newPurchase->is_reported = 0;
            $newPurchase->is_seen = 0;
            $newPurchase->save();

            $getSite = UserSitesTableModel::find($request->site_id);

            $getUser = UsersTableModel::where('id', $user->id)->first();
            $getUser->balance = $getUser->balance - $link->price;
            $getUser->save();

            $transaction = "CustomerController@buyLinkPost";
            $detail = "Müşteri '" . $link->url . "' Sitesinden Kendi '" . $getSite->url . "' Sitesine '" . $request->keywords . "' Kelimelerinde Link Satın Aldı";
            LogSystem::createNewLog($transaction, $detail);

            return redirect()->route('my-links');
        } else {
            $errorMessage = "Bu Site İçin Bu Link Zaten Satın Alınmış! Lütfen Bu Linki Başka Bir Siteniz İçin Satın Alın veya Satın Aldığım Linkler Bölümüne Giderek Düzenleyin.";
            $mySites = UserSitesTableModel::where('user_id', $user->id)->get();
            return view('Pages.Customers.buy-link', compact('errorMessage', 'mySites', 'link'));
        }
    }

    public function buyLinkBatchPost(Request $request)
    {
//        return $request;
        $user = Auth::user();
        $list = [];

        foreach ($request->all() as $key => $data) {
            if (str_contains($key, 'siteid')) {
                $exploded = explode('siteid', $key);
                $keywords = $request->get('keywordsid' . $exploded[1]);
                $list[$exploded[1]] = $keywords;
            }
        }

        $link = LinksTableModel::where('id', $request->link_id)->first();

        foreach ($list as $key => $data) {
            $purchaseControl = PurchasedLinksTableModel::
            where('site_id', $request->site_id)->
            where('link_id', $request->link_id)->
            where('user_id', $user->id)->
            first();

            if (is_null($purchaseControl)) {
                $newPurchase = new PurchasedLinksTableModel;
                $newPurchase->site_id = $key;
                $newPurchase->user_id = $user->id;
                $newPurchase->link_id = $link->id;
                $newPurchase->keyword = $data;
                if ($link->add_type == 1) {
                    $newPurchase->is_added = 1;
                } else {
                    $newPurchase->is_added = 0;
                }
                $newPurchase->is_reported = 0;
                $newPurchase->is_seen = 0;
                $newPurchase->save();

                $getSite = UserSitesTableModel::find($key);

                $getUser = UsersTableModel::where('id', $user->id)->first();
                $getUser->balance = $getUser->balance - $link->price;
                $getUser->save();

                $transaction = "CustomerController@buyLinkPost";
                $detail = "Müşteri '" . $link->url . "' Sitesinden Kendi '" . $getSite->url . "' Sitesine '" . $data . "' Kelimelerinde Link Satın Aldı";
                LogSystem::createNewLog($transaction, $detail);

            } else {
                continue;
            }
        }
        return redirect()->route('my-links');
    }

    public function buyCredit()
    {
        $user = Auth::user();
        $control = SalesTableModel::where('user_id', $user->id)->where('status', 'waiting')->first();
        if (is_null($control)) {
            $transaction = "CustomerController@buyCredit";
            $detail = "Müşteri Kredi Başvurusu Sayfasını Görüntüledi";
            LogSystem::createNewLog($transaction, $detail);

            return view('Pages.Customers.buy-credit');
        } else {
            $errorMessage = "Zaten Onay Bekleyen Bir Ödeme Bildiriminiz Bulunmakta! İşlem Sonlandırılana Kadar Yeni Bir Ödeme Bildiriminde Bulunamazsınız.";
            return view('Pages.Customers.buy-credit', compact('errorMessage'));
        }
    }

    public function buyCreditPost(Request $request)
    {
        $user = Auth::user();
        $newSale = new SalesTableModel;
        $newSale->user_id = $user->id;
        $newSale->iban = $request->iban;
        $newSale->name_surname = $request->name_surname;
        $newSale->order_id = Str::random(64);
        $newSale->amount = $request->amount;
        $newSale->status = "waiting";
        $newSale->is_reported = 0;
        $newSale->is_seen = 0;
        $newSale->save();

        $transaction = "CustomerController@buyCreditPost";
        $detail = "Müşteri " . $request->amount . " Miktarlık Kredi Başvurusu Yaptı";
        LogSystem::createNewLog($transaction, $detail);

        return redirect()->route('buy-credit');
    }

    public function buyIntroductionCredit()
    {
        $user = Auth::user();
        $control = IntroductionSalesTableModel::where('user_id', $user->id)->where('status', 'waiting')->first();
        if (is_null($control)) {
            $transaction = "CustomerController@buyIntroductionCredit";
            $detail = "Müşteri Tanıtım Kredi Başvurusu Sayfasını Görüntüledi";
            LogSystem::createNewLog($transaction, $detail);

            return view('Pages.Customers.buy-introduction-credit');
        } else {
            $errorMessage = "Zaten Onay Bekleyen Bir Ödeme Bildiriminiz Bulunmakta! İşlem Sonlandırılana Kadar Yeni Bir Ödeme Bildiriminde Bulunamazsınız.";
            return view('Pages.Customers.buy-introduction-credit', compact('errorMessage'));
        }
    }

    public function buyIntroductionCreditPost(Request $request)
    {
        $user = Auth::user();
        $newSale = new IntroductionSalesTableModel();
        $newSale->user_id = $user->id;
        $newSale->iban = $request->iban;
        $newSale->name_surname = $request->name_surname;
        $newSale->amount = $request->amount;
        $newSale->status = "waiting";
        $newSale->is_reported = 0;
        $newSale->is_seen = 0;
        $newSale->save();

        $transaction = "CustomerController@buyIntroductionCreditPost";
        $detail = "Müşteri " . $request->amount . " Miktarlık Tanıtım Kredisi Başvurusu Yaptı";
        LogSystem::createNewLog($transaction, $detail);

        return redirect()->route('buy-introduction-credit');
    }

    public function addTicket()
    {
        $transaction = "CustomerController@addTicket";
        $detail = "Müşteri Destek Talebinde Bulunma Sayfasını Açtı";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.add-ticket');
    }

    public function addTicketPost(Request $request)
    {
        $user = Auth::user();
        if (
            is_null($request->title) ||
            is_null($request->priority) ||
            is_null($request->description)
        ) {
            $errorMessage = "Eksik Bilgiler Mevcut! Lütfen Kontrol Ederek Tekrar Deneyin.";
            return view('Pages.Customers.add-ticket', compact('errorMessage'));
        } else {
            $newTicket = new TicketsTableModel;
            $newTicket->user_id = $user->id;
            $newTicket->title = $request->title;
            $newTicket->description = $request->description;
            $newTicket->priority = intval($request->priority);
            $newTicket->status = "pending";
            $newTicket->save();

            $transaction = "CustomerController@addTicketPost";
            $detail = "Müşteri Destek Talebinde Bulundu";
            LogSystem::createNewLog($transaction, $detail);

            return redirect()->route('my-all-tickets', 1);
        }
    }

    public function allTickets($page = 1)
    {
        $user = Auth::user();
        $countControl = TicketsTableModel::where('user_id', $user->id)->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('my-all-tickets', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allTickets = TicketsTableModel::where('user_id', $user->id)->orderBy('updated_at', 'DESC')->limit(10)->get();
            } else {
                $allTickets = TicketsTableModel::where('user_id', $user->id)->skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allTicketsCount = TicketsTableModel::where('user_id', $user->id)->count();
            $respondedCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'responded')->count();
            $resolvedCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'resolved')->count();
            $pendingCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'pending')->count();
            $type = "all";

            $transaction = "CustomerController@addTicketPost";
            $detail = "Müşteri Tüm Destek Taleplerini Görüntüledi";
            LogSystem::createNewLog($transaction, $detail);

            return view('Pages.Customers.my-tickets', compact(
                'allTickets',
                'allTicketsCount',
                'respondedCount',
                'resolvedCount',
                'pendingCount',
                'page',
                'type'
            ));
        }
    }

    public function pendingTickets($page = 1)
    {
        $user = Auth::user();
        $countControl = TicketsTableModel::where('user_id', $user->id)->where('status', 'pending')->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('my-pending-tickets', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allTickets = TicketsTableModel::where('user_id', $user->id)->where('status', 'pending')->orderBy('updated_at', 'DESC')->limit(10)->get();
            } else {
                $allTickets = TicketsTableModel::where('user_id', $user->id)->where('status', 'pending')->skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allTicketsCount = TicketsTableModel::where('user_id', $user->id)->count();
            $respondedCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'responded')->count();
            $resolvedCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'resolved')->count();
            $pendingCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'pending')->count();
            $type = "all";

            $transaction = "CustomerController@addTicketPost";
            $detail = "Müşteri Bekleyen Destek Taleplerini Görüntüledi";
            LogSystem::createNewLog($transaction, $detail);

            return view('Pages.Customers.my-tickets', compact(
                'allTickets',
                'allTicketsCount',
                'respondedCount',
                'resolvedCount',
                'pendingCount',
                'page',
                'type'
            ));
        }
    }

    public function respondedTickets($page = 1)
    {
        $user = Auth::user();
        $countControl = TicketsTableModel::where('user_id', $user->id)->where('status', 'responded')->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('my-responded-tickets', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allTickets = TicketsTableModel::where('user_id', $user->id)->where('status', 'responded')->orderBy('updated_at', 'DESC')->limit(10)->get();
            } else {
                $allTickets = TicketsTableModel::where('user_id', $user->id)->where('status', 'responded')->skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allTicketsCount = TicketsTableModel::where('user_id', $user->id)->count();
            $respondedCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'responded')->count();
            $resolvedCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'resolved')->count();
            $pendingCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'pending')->count();
            $type = "all";

            $transaction = "CustomerController@addTicketPost";
            $detail = "Müşteri Cevaplanan Destek Taleplerini Görüntüledi";
            LogSystem::createNewLog($transaction, $detail);

            return view('Pages.Customers.my-tickets', compact(
                'allTickets',
                'allTicketsCount',
                'respondedCount',
                'resolvedCount',
                'pendingCount',
                'page',
                'type'
            ));
        }
    }

    public function resolvedTickets($page = 1)
    {
        $user = Auth::user();
        $countControl = TicketsTableModel::where('user_id', $user->id)->where('status', 'resolved')->count();
        if (($countControl <= (($page - 1) * 10)) && $countControl > 0) {
            return redirect()->route('my-resolved-tickets', 1);
        } else {
            if (is_null($page) || $page == 1) {
                $allTickets = TicketsTableModel::where('user_id', $user->id)->where('status', 'resolved')->orderBy('updated_at', 'DESC')->limit(10)->get();
            } else {
                $allTickets = TicketsTableModel::where('user_id', $user->id)->where('status', 'resolved')->skip(($page - 1) * 10)->take(10)->orderBy('updated_at', 'DESC')->get();
            }
            $allTicketsCount = TicketsTableModel::where('user_id', $user->id)->count();
            $respondedCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'responded')->count();
            $resolvedCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'resolved')->count();
            $pendingCount = TicketsTableModel::where('user_id', $user->id)->where('status', 'pending')->count();
            $type = "all";

            $transaction = "CustomerController@addTicketPost";
            $detail = "Müşteri Çözülen Destek Taleplerini Görüntüledi";
            LogSystem::createNewLog($transaction, $detail);

            return view('Pages.Customers.my-tickets', compact(
                'allTickets',
                'allTicketsCount',
                'respondedCount',
                'resolvedCount',
                'pendingCount',
                'page',
                'type'
            ));
        }
    }

    public function showTicket($id)
    {
        $ticket = TicketsTableModel::find($id);
        $ticketMessages = TicketMessagesTableModel::where('ticket_id', $id)->orderBy('created_at', 'DESC')->get();
        $ticketUser = UsersTableModel::where('id', $ticket->user_id)->first();

        $transaction = "CustomerController@addTicketPost";
        $detail = "Müşteri " . $ticket->id . "ID'li Destek Talebinin İçeriğine Baktı";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Tickets.show-ticket', compact(
            'ticket',
            'ticketMessages',
            'ticketUser'
        ));
    }

    public function myPremiumSites()
    {
        $user = Auth::user();
        if ($user->is_premium == 0) {
            return redirect()->route('premium-packages');
        } else {
            $transaction = "CustomerController@myPremiumSites";
            $detail = "Müşteri Kendi Premium Sitelerinin Listesine Baktı";
            LogSystem::createNewLog($transaction, $detail);

            $myPremiumSites = PremiumSitesTableModel::where('user_id', $user->id)->get();
            $myPremiumPackage = PremiumPackagesTableModel::find(PremiumSalesTableModel::select('package_id')->where('user_id', $user->id)->where('is_active', 1)->first()->package_id);
            return view('Pages.Customers.my-premium-sites', compact('myPremiumSites', 'myPremiumPackage'));
        }
    }

    public function addPremiumSiteForm()
    {
        $user = Auth::user();
        if ($user->is_premium == 0) {
            return redirect()->route('premium-packages');
        } else {
            $user = Auth::user();
            $premiumControl = PremiumSalesTableModel::where('user_id', $user->id)->where('is_active', 1)->first();
            if (is_null($premiumControl)) {
                $errorMessage = "Aktif Bir Premium Üyeliğiniz Bulunmamaktadır!";
                return view('Pages.Customers.add-premium-site', compact('errorMessage'));
            } else {
                $myPremiumSites = PremiumSitesTableModel::where('user_id', $user->id)->get();
                $myPremiumPackage = PremiumPackagesTableModel::find(PremiumSalesTableModel::select('package_id')->where('user_id', $user->id)->where('is_active', 1)->first()->package_id);
                if (count($myPremiumSites) < $myPremiumPackage->allowed_premium_site) {
                    $mySites = UserSitesTableModel::where('user_id', $user->id)->get();
                    $controlledSites = [];
                    foreach ($mySites as $mySite) {
                        $control = PremiumSitesTableModel::where('site_id', $mySite->id)->first();
                        if (is_null($control)) {
                            $controlledSites[] = [
                                'site_id' => $mySite->id,
                                'site_url' => $mySite->url
                            ];
                        }
                    }

                    $transaction = "CustomerController@addPremiumSiteForm";
                    $detail = "Müşteri Premium Site Ayarlama Formunu Açtı";
                    LogSystem::createNewLog($transaction, $detail);

                    return view('Pages.Customers.add-premium-site', compact('controlledSites', 'myPremiumPackage'));
                } else {
                    $errorMessage = "Zaten Premium Site(leri)nizi Eklemişsiniz. Paketiniz Daha Fazlasını Eklemenize İzin Vermemektedir!";
                    return view('Pages.Customers.add-premium-site', compact('errorMessage'));
                }
            }
        }
    }

    public function addPremiumSitePost(Request $request)
    {
        $user = Auth::user();

        $alexaOfCountryRank = 9999999999;
        $url = UserSitesTableModel::find($request->premium_site_id)->url;
        $result = Alexa::UrlInfo($url);
        $alexaOfGlobalRank = $result->Awis->Results->Result->Alexa->TrafficData->Rank;
        if (!is_null($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry)) {
            if (is_array($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry->Country)) {
                foreach ($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry->Country as $country) {
                    if (!is_null(@$country->Rank) && (@$country->Rank < @$alexaOfCountryRank)) {
                        $alexaOfCountryRank = $country->Rank;
                        $array = (array)$country;
                        $alexaOfCountry = $array["@Code"];
                    }
                }
            } else {
                $array = (array)$alexaOfCountryRank = $result->Awis->Results->Result->Alexa->TrafficData->RankByCountry->Country;
                $alexaOfCountryRank = $array["Rank"];
                $alexaOfCountry = $array["@Code"];
            }
        }
        if ($alexaOfCountryRank == 9999999999) {
            $alexaOfCountryRank = 0;
        }
        $newPremium = new Premium;
        $googleIndex = $newPremium->googleIndexCount($url);
        try {
            $metaTags = get_meta_tags('https://www.' . $url);
        } catch (\Exception $exception) {
            try {
                $metaTags = get_meta_tags('http://www.' . $url);
            } catch (\Exception $e) {
                $metaTags = [];
            }
        }

        if (!isset($metaTags["description"])) {
            $metaTags["description"] = "";
        }
        if (!isset($metaTags["keywords"])) {
            $metaTags["keywords"] = "";
        }
        if (!isset($alexaOfCountry)) {
            $alexaOfCountry = "Yok";
        }

        $newPremiumSite = new PremiumSitesTableModel;
        $newPremiumSite->user_id = $user->id;
        $newPremiumSite->site_id = $request->premium_site_id;
        if (!is_null($request->enemy_url)) {
            $enemyUrl = trim($request->enemy_url, '/');
            if (!preg_match('#^http(s)?://#', $enemyUrl)) {
                $enemyUrl = 'http://' . $enemyUrl;
            }
            $urlParts = parse_url($enemyUrl);
            $lastUrl = preg_replace('/^www\./', '', $urlParts['host']);
            $newPremiumSite->enemy_url = $lastUrl;
        }
        $newPremiumSite->keyword = $request->keyword;
        if (!is_null($request->keyword_2)) {
            $newPremiumSite->keyword_2 = $request->keyword_2;
        }
        if (!is_null($request->keyword_3)) {
            $newPremiumSite->keyword_3 = $request->keyword_3;
        }
        if (!is_null($request->keyword_4)) {
            $newPremiumSite->keyword_4 = $request->keyword_4;
        }
        if (!is_null($request->keyword_5)) {
            $newPremiumSite->keyword_5 = $request->keyword_5;
        }
        $newPremiumSite->alexa_global = $alexaOfGlobalRank;
        $newPremiumSite->alexa_country = $alexaOfCountryRank;
        $newPremiumSite->alexa_country_code = $alexaOfCountry;
        $newPremiumSite->google_index = $googleIndex;
        $newPremiumSite->yandex_index = 0;
        $newPremiumSite->meta_description = $metaTags["description"];
        $newPremiumSite->meta_keywords = $metaTags["keywords"];
        $newPremiumSite->save();

        $rankAnalysis = new Premium;
        $getRank = $rankAnalysis->findGooglePositionLikeKeyword($request->keyword, $url);

        $newAnalysis = new AnalysisTableModel;
        $newAnalysis->site_id = $request->premium_site_id;
        $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
        $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
        $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
        $newAnalysis->keyword = $request->keyword;
        $newAnalysis->rank = $getRank;
        $newAnalysis->save();

        if (!is_null($request->enemy_url)) {
            $rankAnalysisEnemy = new Premium;
            $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($request->keyword, $lastUrl);

            $newAnalysis = new EnemyAnalysisTableModel;
            $newAnalysis->site_id = $request->premium_site_id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $request->keyword;
            $newAnalysis->rank = $getRankEnemy;
            $newAnalysis->save();
        }

        if (!is_null($request->keyword_2)) {
            $rankAnalysis2 = new Premium;
            $getRank2 = $rankAnalysis2->findGooglePositionLikeKeyword($request->keyword_2, $url);

            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $request->premium_site_id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $request->keyword_2;
            $newAnalysis->rank = $getRank2;
            $newAnalysis->save();

            if (!is_null($request->enemy_url)) {
                $rankAnalysisEnemy = new Premium;
                $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($request->keyword_2, $lastUrl);

                $newAnalysis = new EnemyAnalysisTableModel;
                $newAnalysis->site_id = $request->premium_site_id;
                $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
                $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
                $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
                $newAnalysis->keyword = $request->keyword_2;
                $newAnalysis->rank = $getRankEnemy;
                $newAnalysis->save();
            }

        }
        if (!is_null($request->keyword_3)) {
            $rankAnalysis3 = new Premium;
            $getRank3 = $rankAnalysis3->findGooglePositionLikeKeyword($request->keyword_3, $url);

            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $request->premium_site_id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $request->keyword_3;
            $newAnalysis->rank = $getRank3;
            $newAnalysis->save();

            if (!is_null($request->enemy_url)) {
                $rankAnalysisEnemy = new Premium;
                $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($request->keyword_3, $lastUrl);

                $newAnalysis = new EnemyAnalysisTableModel;
                $newAnalysis->site_id = $request->premium_site_id;
                $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
                $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
                $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
                $newAnalysis->keyword = $request->keyword_3;
                $newAnalysis->rank = $getRankEnemy;
                $newAnalysis->save();
            }

        }
        if (!is_null($request->keyword_4)) {
            $rankAnalysis4 = new Premium;
            $getRank4 = $rankAnalysis4->findGooglePositionLikeKeyword($request->keyword_4, $url);

            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $request->premium_site_id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $request->keyword_4;
            $newAnalysis->rank = $getRank4;
            $newAnalysis->save();

            if (!is_null($request->enemy_url)) {
                $rankAnalysisEnemy = new Premium;
                $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($request->keyword_4, $lastUrl);

                $newAnalysis = new EnemyAnalysisTableModel;
                $newAnalysis->site_id = $request->premium_site_id;
                $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
                $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
                $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
                $newAnalysis->keyword = $request->keyword_4;
                $newAnalysis->rank = $getRankEnemy;
                $newAnalysis->save();
            }

        }
        if (!is_null($request->keyword_5)) {
            $rankAnalysis5 = new Premium;
            $getRank5 = $rankAnalysis5->findGooglePositionLikeKeyword($request->keyword_5, $url);

            $newAnalysis = new AnalysisTableModel;
            $newAnalysis->site_id = $request->premium_site_id;
            $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
            $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
            $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
            $newAnalysis->keyword = $request->keyword_5;
            $newAnalysis->rank = $getRank5;
            $newAnalysis->save();

            if (!is_null($request->enemy_url)) {
                $rankAnalysisEnemy = new Premium;
                $getRankEnemy = $rankAnalysisEnemy->findGooglePositionLikeKeyword($request->keyword_5, $lastUrl);

                $newAnalysis = new EnemyAnalysisTableModel;
                $newAnalysis->site_id = $request->premium_site_id;
                $newAnalysis->year = strftime("%Y", strtotime(date("YmdHis")));
                $newAnalysis->month = strftime("%m", strtotime(date("YmdHis")));
                $newAnalysis->day = strftime("%d", strtotime(date("YmdHis")));
                $newAnalysis->keyword = $request->keyword_5;
                $newAnalysis->rank = $getRankEnemy;
                $newAnalysis->save();
            }

        }

        $transaction = "CustomerController@addPremiumSitePost";
        $detail = "Müşteri '" . $url . "' Sitesini Premium Site Olarak Ayarladı";
        LogSystem::createNewLog($transaction, $detail);

        return redirect()->route('my-premium-sites');
    }

    public function myPremiumSite($id)
    {
        $user = Auth::user();
        if ($user->is_premium == 0) {
            return redirect()->route('premium-packages');
        } else {
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

            $transaction = "CustomerController@myPremiumSite";
            $detail = "Müşteri Premium Sitesi Olan '" . $url . "' Sitesinin Analizlerini İnceledi";
            LogSystem::createNewLog($transaction, $detail);

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
                                return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyAnalysisKeywordFour', 'getWeeklyAnalysisKeywordFive', 'getWeeklyEnemyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordTwo', 'getWeeklyEnemyAnalysisKeywordThree', 'getWeeklyEnemyAnalysisKeywordFour', 'getWeeklyEnemyAnalysisKeywordFive', 'getPremiumSite', 'url'));
                            } else {
                                return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyAnalysisKeywordFour', 'getWeeklyEnemyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordTwo', 'getWeeklyEnemyAnalysisKeywordThree', 'getWeeklyEnemyAnalysisKeywordFour', 'getPremiumSite', 'url'));
                            }
                        } else {
                            return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyEnemyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordTwo', 'getWeeklyEnemyAnalysisKeywordThree', 'getPremiumSite', 'url'));
                        }
                    } else {
                        return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyEnemyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordTwo', 'getPremiumSite', 'url'));
                    }
                } else {
                    return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyEnemyAnalysisKeywordOne', 'getPremiumSite', 'url'));
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
                                return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyAnalysisKeywordFour', 'getWeeklyAnalysisKeywordFive', 'getPremiumSite', 'url'));
                            } else {
                                return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getWeeklyAnalysisKeywordFour', 'getPremiumSite', 'url'));
                            }
                        } else {
                            return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getWeeklyAnalysisKeywordThree', 'getPremiumSite', 'url'));
                        }
                    } else {
                        return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getWeeklyAnalysisKeywordTwo', 'getPremiumSite', 'url'));
                    }
                } else {
                    return view('Pages.Customers.my-premium-site', compact('getWeeklyAnalysisKeywordOne', 'getPremiumSite', 'url'));
                }
            }
        }
    }

    public function premiumPackages()
    {
        $user = Auth::user();
        if ($user->is_premium == 1) {
            return redirect()->route('my-premium-sites');
        } else {
            $transaction = "CustomerController@premiumPackages";
            $detail = "Müşteri Premium Paketleri İnceledi";
            LogSystem::createNewLog($transaction, $detail);

            $premiumPackages = PremiumPackagesTableModel::all();
            return view('Pages.Customers.premium-packages', compact('premiumPackages'));
        }
    }

    public function buyPremiumPackage(Request $request)
    {
        $user = Auth::user();
        if (is_null($request->package_id)) {
            $premiumPackages = PremiumPackagesTableModel::all();
            $errorMessage = "Hiçbir Paket Seçilmemiş! Lütfen Kontrol Ederek Tekrar Deneyin.";
            return view('Pages.Customers.premium-packages', compact('premiumPackages', 'errorMessage'));
        } else {
            $getPackage = PremiumPackagesTableModel::find($request->package_id);
            if ($user->balance < $getPackage->price) {
                $premiumPackages = PremiumPackagesTableModel::all();
                $errorMessage = "Bakiyeniz Bu Paketi Almak İçin Yeterli Değil! Lütfen Bakiye Yükleyiniz.";
                return view('Pages.Customers.premium-packages', compact('premiumPackages', 'errorMessage'));
            } else {
                $newSale = new PremiumSalesTableModel;
                $newSale->user_id = $user->id;
                $newSale->package_id = $getPackage->id;
                $newSale->purchased_date = date("Y-m-d H:i:s");
                $newSale->expire_date = strftime("%Y-%m-%d %H:%M:%S", strtotime('+30 days'));
                $newSale->is_active = 1;
                $newSale->save();

                $getUser = User::find($user->id);
                $getUser->balance = $getUser->balance - $getPackage->price;
                $getUser->is_premium = 1;
                $getUser->save();

                $transaction = "CustomerController@buyPremiumPackage";
                $detail = "Müşteri Yeni Premium Paket Satın Aldı. Satın Alınan Paket '" . $getPackage->name . "'";
                LogSystem::createNewLog($transaction, $detail);

                return redirect()->route('my-premium-sites');
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////

    public function IntroductionSites()
    {
        $sites = IntroductionSite::where('is_delete', 0)->get();

        return view('Pages.Customers.introduction-sites', [
            'sites' => $sites
        ]);
    }

    public function buyIntroductionSite($id)
    {
        $user = Auth::user();
        $site = IntroductionSite::find($id);
        $mySites = UserSitesTableModel::where('user_id', $user->id)->get();

        $transaction = "CustomerController@buyIntroductionSite";
        $detail = "Müşteri '" . $site->url . "' Sitesinden Tanıtım Alma Ekranını Görüntüledi";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.buy-introduction-site', compact('mySites', 'site'));
    }

    public function buyIntroductionSitePost(Request $request)
    {
//        return $request;

        $introductionSite = IntroductionSite::find($request->introduction_site_id);

        if ($introductionSite->auto == 1) {

            $postList = "";

            $purchases = IntroductionPurchase::where('introduction_site_id', $request->introduction_site_id)->get();
            foreach ($purchases as $purchase) {
                $postList .= $purchase->post_id;
                $purchase == end($purchases) ? $postList .= "," : null;
            }

            $postdata = http_build_query([
                'introduction_text' => $request->introduction_text,
                'postList' => $postList,
                'add_type' => $request->add_type
            ]);

            $opts = array('http' =>
                array(
                    'method' => 'POST',
                    'header' => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $postdata
                )
            );

            $context = stream_context_create($opts);

            $response = collect(json_decode(file_get_contents($introductionSite->url . 'wp-includes/api/api.php', false, $context)));

            $newPurchase = new IntroductionPurchase;
            $newPurchase->user_id = auth()->user()->id;
            $newPurchase->post_id = $response->get('post_id');
            $newPurchase->introduction_site_id = $request->introduction_site_id;
            $newPurchase->introduction_text = $request->introduction_text;
            $newPurchase->add_type = $request->add_type;
            $newPurchase->post_url = $introductionSite->url . '/' . $response->get('url');
            $newPurchase->save();

            $user = UsersTableModel::find(auth()->user()->id);
            $user->introduction_balance -= $introductionSite->price;
            $user->save();

            $transaction = "CustomerController@buyIntroductionSitePost";
            $detail = "Müşteri '" . $introductionSite->url . '/' . $response->get('url') . "' Sitesinden Tanıtım Satın Aldı";
            LogSystem::createNewLog($transaction, $detail);

            return redirect()->route('my-introductions');
        } else {
            $newPurchase = new IntroductionPurchase;
            $newPurchase->user_id = auth()->user()->id;
            $newPurchase->post_id = 0;
            $newPurchase->introduction_site_id = $request->introduction_site_id;
            $newPurchase->introduction_text = $request->introduction_text;
            $newPurchase->add_type = $request->add_type;
            $newPurchase->post_url = '';
            $newPurchase->save();

            $user = UsersTableModel::find(auth()->user()->id);
            $user->introduction_balance -= $introductionSite->price;
            $user->save();

            $transaction = "CustomerController@buyIntroductionSitePost";
            $detail = "Müşteri '" . $introductionSite->url . "' Sitesinden Tanıtım Satın Aldı";
            LogSystem::createNewLog($transaction, $detail);

            return redirect()->route('my-introductions');
        }


    }

    public function myIntroductions()
    {
        $user = Auth::user();
        $purchases = IntroductionPurchase::where('user_id', $user->id)->get();

        $transaction = "CustomerController@myIntroductions";
        $detail = "Müşteri Satın Aldığı Tanıtımları Görüntüledi";
        LogSystem::createNewLog($transaction, $detail);

        return view('Pages.Customers.my-introductions', compact('purchases'));
    }

    public function buyTotallyForOne()
    {
        return view('Pages.Customers.buy-totally-for-one', [
            'sites' => UserSitesTableModel::where('user_id', auth()->user()->id)->get(),
            'links' => LinksTableModel::where('is_delete', 0)->get()
        ]);
    }

    public function buyTotallyForOnePost(Request $request)
    {
        $user = Auth::user();

        if ($user->balance < LinksTableModel::whereIn('id', $request->links)->sum('price')) {
            $errorMessage = "Seçtiğiniz Sitelerin Hepsini Alacak Bakiyeniz Mevcut Değil!";
            return view('Pages.Customers.buy-totally-for-one', [
                'sites' => UserSitesTableModel::where('user_id', auth()->user()->id)->get(),
                'links' => LinksTableModel::where('is_delete', 0)->get(),
                'errorMessage' => $errorMessage
            ]);
        } else {
            foreach ($request->links as $linkId) {
                $link = LinksTableModel::where('id', $linkId)->first();
                $purchaseControl = PurchasedLinksTableModel::
                where('site_id', $request->site_id)->
                where('link_id', $link->id)->
                where('user_id', $user->id)->
                first();

                if (is_null($purchaseControl)) {
                    $newPurchase = new PurchasedLinksTableModel;
                    $newPurchase->site_id = $request->site_id;
                    $newPurchase->user_id = $user->id;
                    $newPurchase->link_id = $link->id;
                    $newPurchase->keyword = $request->keywords;
                    if ($link->add_type == 1) {
                        $newPurchase->is_added = 1;
                    } else {
                        $newPurchase->is_added = 0;
                    }
                    $newPurchase->is_reported = 0;
                    $newPurchase->is_seen = 0;
                    $newPurchase->save();

                    $getUser = UsersTableModel::where('id', $user->id)->first();
                    $getUser->balance = $getUser->balance - $link->price;
                    $getUser->save();
                }
            }

            return redirect()->route('my-links');
        }
    }

}

