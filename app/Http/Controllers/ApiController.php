<?php

namespace App\Http\Controllers;

use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\UserSitesTableModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getLinks($url){
        $getLink = LinksTableModel::where('url',$url)->first();
        $getPurchasedLinks = PurchasedLinksTableModel::where('link_id',$getLink->id)->get();
        $string = "<div style='display:none'>";
        foreach ($getPurchasedLinks as $purchasedLink){
            $site = UserSitesTableModel::where('id',$purchasedLink->site_id)->first();
            $string .= "<a href='http://".$site->url."' target='_blank' title='".$purchasedLink->keyword."'>".$purchasedLink->keyword."</a>";
        }
        $string .= "</div>";
        return $string;
    }
}
