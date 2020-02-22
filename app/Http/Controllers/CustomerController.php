<?php

namespace App\Http\Controllers;

use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\SalesTableModel;
use App\Models\UserSitesTableModel;
use App\Models\UsersTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class CustomerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myAccount()
    {
        return view('Pages.Customers.my-account');
    }

    public function mySites()
    {
        $user = Auth::user();
        $mySites = UserSitesTableModel::where('user_id', $user->id)->get();
        return view('Pages.Customers.my-sites', compact('mySites'));
    }

    public function deleteSite($id)
    {
        UserSitesTableModel::where('id', $id)->delete();
        return redirect()->route('my-sites');
    }

    public function addSite()
    {
        return view('Pages.Customers.add-site');
    }

    public function addSiteControl(Request $request)
    {
        if (
        is_null($request->site_url)
        ) {
            $errorMessage = "Eksik Bilgiler Mevcut! Lütfen Kontrol Ederek Tekrar Deneyin.";
            return view('Pages.Customers.add-site', compact('errorMessage'));
        }else{
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
            $newSite->save();
            return redirect()->route('my-sites');
        }
    }

    public function myLinks()
    {
        $user = Auth::user();
        $purchasedLinks = PurchasedLinksTableModel::where('user_id', $user->id)->get();
        $returnArray = [];
        foreach ($purchasedLinks as $purchasedLink){
            $getLink = LinksTableModel::select('url')->where('id',$purchasedLink->link_id)->first();
            $getSite = UserSitesTableModel::select('url')->where('id',$purchasedLink->site_id)->first();
            try {
                $control = file_get_contents("http://".$getLink->url);
                if (strpos($control, $getSite->url)) {
                    $returnArray[] = [
                        "site_url" => $getSite->url,
                        "link_url" => $getLink->url,
                        "keywords" => $purchasedLink->keyword,
                        "status" => 1
                    ];
                }else{
                    $returnArray[] = [
                        "site_url" => $getSite->url,
                        "link_url" => $getLink->url,
                        "keywords" => $purchasedLink->keyword,
                        "status" => 0
                    ];
                }
            }catch (\Exception $e){
                $returnArray[] = [
                    "site_url" => $getSite->url,
                    "link_url" => $getLink->url,
                    "keywords" => $purchasedLink->keyword,
                    "status" => 0
                ];
            }
        }
        return view('Pages.Customers.my-links', compact('returnArray'));
    }

    public function allLinks()
    {
        $allLinks = LinksTableModel::where('is_delete', 0)->get();
        return view('Pages.Customers.all-links', compact('allLinks'));
    }

    public function buyLink($linkID)
    {
        $user = Auth::user();
        $link = LinksTableModel::where('id', $linkID)->first();
        $mySites = UserSitesTableModel::where('user_id', $user->id)->get();
        return view('Pages.Customers.buy-link', compact('mySites', 'link'));
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
            $newPurchase->is_added = 1;
            $newPurchase->is_reported = 0;
            $newPurchase->is_seen = 0;
            $newPurchase->save();

            $getUser = UsersTableModel::where('id',$user->id)->first();
            $getUser->balance = $getUser->balance - $link->price;
            $getUser->save();

            return redirect()->route('my-links');
        } else {
            $errorMessage = "Bu Site İçin Bu Link Zaten Satın Alınmış! Lütfen Bu Linki Başka Bir Siteniz İçin Satın Alın veya Satın Aldığım Linkler Bölümüne Giderek Düzenleyin.";
            $mySites = UserSitesTableModel::where('user_id', $user->id)->get();
            return view('Pages.Customers.buy-link', compact('errorMessage', 'mySites', 'link'));
        }
    }

    public function buyCredit()
    {
        $user = Auth::user();
        $control = SalesTableModel::where('user_id',$user->id)->where('status','waiting')->first();
        if(is_null($control)){
            return view('Pages.Customers.buy-credit');
        }else{
            $errorMessage = "Zaten Onay Bekleyen Bir Ödeme Bildiriminiz Bulunmakta! İşlem Sonlandırılana Kadar Yeni Bir Ödeme Bildiriminde Bulunamazsınız.";
            return view('Pages.Customers.buy-credit',compact('errorMessage'));
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
        return redirect()->route('buy-credit');
    }
}
