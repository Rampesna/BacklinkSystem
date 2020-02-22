<?php

namespace App\Http\Controllers;

use App\Helpers\Alexa;
use App\Helpers\LogSystem;
use App\Models\LinksTableModel;
use Illuminate\Http\Request;


class LinkControllers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allLinks()
    {
        $allLinks = LinksTableModel::where('is_delete', 0)->get();
        $transaction = "LinkControllers@allLinks";
        $detail = "Tüm Linkler Görüntülendi";
        if (LogSystem::createNewLog($transaction, $detail)) {
            return view('Pages.Links.all-links', compact('allLinks'));
        } else {
            return abort(403);
        }
    }

    public function addLink()
    {
        return view('Pages.Links.add-link');
    }

    public function addLinkControl(Request $request)
    {
        if (LinksTableModel::where('url', $request->new_link)->count() > 0) {
            $link = LinksTableModel::where('url', $request->new_link)->get();
            if($link->is_delete == 0){
                $errorMessage = "Bu Site Zaten Sistemde Mevcut! Lütfen Başka Bir Site Ekleyin.";
                return view('Pages.Links.add-link', compact('errorMessage'));
            }else{
                //
            }
        }else{
            $alexaOfCountryRank = 9999999999;
            $result = Alexa::UrlInfo($request->new_link);
            $alexaOfGlobalRank = $result->Awis->Results->Result->Alexa->TrafficData->Rank;
            if (!is_null($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry)) {
                foreach ($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry->Country as $country) {
                    if (!is_null(@$country->Rank) && (@$country->Rank < @$alexaOfCountryRank)) {
                        $alexaOfCountryRank = $country->Rank;
                        $array = (array)$country;
                        $alexaOfCountry = $array["@Code"];
                    }
                }
            }
            if($alexaOfCountryRank == 9999999999){
                $alexaOfCountryRank = 0;
                $alexaOfCountry = "Yok";
            }
            $linkingCount = $result->Awis->Results->Result->Alexa->ContentData->LinksInCount;
            $returnArray = [
                "site" => $request->new_link,
                "global_alexa" => $alexaOfGlobalRank,
                "country" => @$alexaOfCountry,
                "country_alexa" => $alexaOfCountryRank,
                "linking_count" => $linkingCount
            ];
            return view('Pages.Links.add-link', compact('returnArray'));
        }
    }

    public function addLinkPost(Request $request)
    {
        if (
            is_null($request->site_url) ||
            is_null($request->global_alexa) ||
            is_null($request->country_alexa) ||
            is_null($request->linking_count) ||
            is_null($request->da_value) ||
            is_null($request->pa_value) ||
            is_null($request->price) ||
            is_null($request->sale_limit) ||
            is_null($request->type)
        ) {
            $errorMessage = "Eksik Bilgiler Var, Lütfen Kontrol Ederek Tekrar Deneyin!";
            return view('Pages.Links.add-link', compact('errorMessage'));
        } else {
            $newLink = new LinksTableModel;
            $newLink->url = $request->site_url;
            $newLink->remained = $request->sale_limit;
            $newLink->alexa_global = $request->global_alexa;
            if (!is_null($request->country)) {
                $newLink->country = $request->country;
            }
            $newLink->alexa_country = $request->country_alexa;
            $newLink->sites_linking_in = $request->linking_count;
            $newLink->da_value = $request->da_value;
            $newLink->pa_value = $request->pa_value;
            $newLink->type = $request->type;
            $newLink->price = $request->price;
            if ($request->is_adult == true) {
                $newLink->is_adult = 1;
            } else {
                $newLink->is_adult = 0;
            }
            $newLink->save();
            return redirect()->route('all-links');
        }

    }

    public function editLink($id)
    {
        $link = LinksTableModel::find($id);
        return view('Pages.Links.edit-link', compact('link'));
    }

    public function updateLink(Request $request)
    {
        if (is_null($request->id)) {
            return abort(403);
        } else if (
            is_null($request->da_value) ||
            is_null($request->pa_value) ||
            is_null($request->price) ||
            is_null($request->sale_limit) ||
            is_null($request->type)
        ) {
            $link = LinksTableModel::find($request->id);
            $errorMessage = "Eksik Alanlar Mevcut. Lütfen Kontrol Ederek Tekrar Deneyin!";
            return view('Pages.Links.edit-link', compact('link', 'errorMessage'));
        } else {
            $link = LinksTableModel::find($request->id);
            $link->da_value = $request->da_value;
            $link->pa_value = $request->pa_value;
            $link->price = $request->price;
            $link->remained = $request->sale_limit;
            $link->type = $request->type;
            if ($request->is_adult == true) {
                $link->is_adult = 1;
            } else {
                $link->is_adult = 0;
            }
            $link->save();
            return redirect()->route('all-links');
        }
    }

    public function deleteLink($id)
    {
        $link = LinksTableModel::find($id);
        $link->is_delete = 1;
        $link->save();
        return redirect()->route('all-links');
    }

}
