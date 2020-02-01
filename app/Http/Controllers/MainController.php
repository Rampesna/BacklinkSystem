<?php

namespace App\Http\Controllers;

use App\Helpers\LogSystem;
use App\Models\LinksTableModel;
use Illuminate\Http\Request;
use App\Helpers\Alexa;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $result = Alexa::UrlInfo("mediawbh.com.tr");
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

//        return response()->json($result,200);
        $transaction = "MainController@index";
        $detail = "Kontrol Paneli Görüntülendi";
        if(LogSystem::createNewLog($transaction,$detail)){
            return view('Pages.index');
        }else{
            return abort(403);
        }

    }


}
