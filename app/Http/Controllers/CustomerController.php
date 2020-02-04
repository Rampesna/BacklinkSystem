<?php

namespace App\Http\Controllers;

use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\UserSitesTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function addSite()
    {
        return view('Pages.Customers.add-site');
    }

    public function addSiteControl(Request $request)
    {
        if(
            is_null($request->site_url)
        ){
            $errorMessage = "Eksik Bilgiler Mevcut! Lütfen Kontrol Ederek Tekrar Deneyin.";
            return view('Pages.Customers.add-site',compact('errorMessage'));
        }
        if (UserSitesTableModel::where('url', $request->url)->count() > 0) {
            $errorMessage = "Bu Site Sistemde Zaten Mevcut. Lütfen Kontrol Ederek Tekrar Deneyin!";
            return view('Pages.Customers.add-site',compact('errorMessage'));
        } else {
            $returnArray = [
                "url" => $request->site_url,
                "status" => true
            ];
            return view('Pages.Customers.add-site',compact('returnArray'));
        }
    }

    public function addSitePost(Request $request)
    {
        if(is_null($request->site_url)){
            $errorMessage = "Bir Hata Oluştu. Lütfen Bir Süre Sonra Tekrar Deneyin!";
            return view('Pages.Customers.add-site',compact('errorMessage'));
        }else{
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
        $myLinks = PurchasedLinksTableModel::where('user_id',$user->id)->get();
        return view('Pages.Customers.my-links',compact('myLinks'));
    }

    public function allLinks()
    {
        $allLinks = LinksTableModel::where('is_delete', 0)->get();
        return view('Pages.Customers.all-links', compact('allLinks'));
    }
}
