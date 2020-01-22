<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Helpers\Alexa;

class MypageController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
//        $result = Alexa::UrlInfo("haber7.com");
//        $alexaOfGlobalRank = $result->Awis->Results->Result->Alexa->TrafficData->Rank;
//        $alexaOfCountryRank = 9999999999;
//        foreach ($result->Awis->Results->Result->Alexa->TrafficData->RankByCountry->Country as $country){
//            if(!is_null($country->Rank) && ($country->Rank < $alexaOfCountryRank)){
//                $alexaOfCountryRank = $country->Rank;
//                $array = (array) $country;
//                $alexaOfCountry = $array["@Code"];
//            }
//        }
//        $linkingCount = $result->Awis->Results->Result->Alexa->ContentData->LinksInCount;

//        return view('Pages.index',compact('alexaOfGlobalRank','alexaOfCountry','alexaOfCountryRank','linkingCount'));
        return view('Pages.index');
    }

}
