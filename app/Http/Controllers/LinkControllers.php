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

    public function addLink()
    {
        return view('Pages.Links.add-link');
    }

    public function addLinkControl(Request $request)
    {
        $alexaOfCountryRank = 9999999999;
        $result = Alexa::UrlInfo($request->new_link);
        $alexaOfGlobalRank = $result->Awis->Results->Result->Alexa->TrafficData->Rank;
        if(!is_null($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry)){
            foreach ($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry->Country as $country){
                if(!is_null($country->Rank) && ($country->Rank < $alexaOfCountryRank)){
                    $alexaOfCountryRank = $country->Rank;
                    $array = (array) $country;
                    $alexaOfCountry = $array["@Code"];
                }
            }
        }
        $linkingCount = $result->Awis->Results->Result->Alexa->ContentData->LinksInCount;
        $returnArray = [
            "site" => $request->new_link,
            "global_alexa" => $alexaOfGlobalRank,
            "country" => @$alexaOfCountry,
            "country_alexa" => $alexaOfCountryRank,
            "linking_count" => $linkingCount
        ];

        return view('Pages.Links.add-link',compact('returnArray'));

    }

    public function addLinkPost(Request $request)
    {
        if(!is_null($request->site)){
            return response()->json(true,200);
        }else{
            return response()->json(true,200);
        }
    }

    public function allLinks()
    {
        $allLinks = LinksTableModel::all();
        $transaction = "LinkControllers@allLinks";
        $detail = "Tüm Linkler Görüntülendi";
        if(LogSystem::createNewLog($transaction,$detail)){
            return view('Pages.Links.all-links',compact('allLinks'));
        }else{
            return abort(403);
        }

    }

}
