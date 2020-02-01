<?php

namespace App\Http\Controllers;

use App\Helpers\Alexa;
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
        $sites = trim($request->sites);
        $siteArray = explode("\n", $sites);
        $siteArray = array_filter($siteArray, 'trim');
        $returnArray = [];
        foreach ($siteArray as $site){
            $alexaOfCountryRank = 9999999999;
            $result = Alexa::UrlInfo($site);
            $alexaOfGlobalRank = $result->Awis->Results->Result->Alexa->TrafficData->Rank;
            $returnArray["data"][] = [
                "site" => $site,
                "global_alexa" => $alexaOfGlobalRank
            ];
//            if(!is_null($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry)){
//                foreach ($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry->Country as $country){
//                    if(!is_null($country->Rank) && ($country->Rank < $alexaOfCountryRank)){
//                        $alexaOfCountryRank = $country->Rank;
//                        $array = (array) $country;
//                        $alexaOfCountry = $array["@Code"];
//                    }
//                }
//            }
//            $linkingCount = $result->Awis->Results->Result->Alexa->ContentData->LinksInCount;
//
        }

        return view('Pages.Links.add-link',compact('returnArray'));
    }

    public function allLinks()
    {
        $allLinks = LinksTableModel::all();
        return view('Pages.Links.all-links',compact('allLinks'));
    }

}
