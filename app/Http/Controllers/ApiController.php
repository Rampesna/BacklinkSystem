<?php

namespace App\Http\Controllers;

use App\Helpers\General;
use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\UserSitesTableModel;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getLinks($url)
    {
        if (base64_decode($url, true) == true) {
            $url = base64_decode($url);
        }
        $url = General::clearLink($url);
        $getLink = LinksTableModel::where('url', 'LIKE', "%{$url}%")->first();
        $getPurchasedLinks = PurchasedLinksTableModel::where('link_id', $getLink->id)->get();
        $string = '<div id="bcklnksts" style="display:none">';
        foreach ($getPurchasedLinks as $purchasedLink) {
            $site = UserSitesTableModel::where('id', $purchasedLink->site_id)->first();
//            $string .= "<a href='http://".$site->url."' target='_blank' title='".$purchasedLink->keyword."'>".$purchasedLink->keyword."</a>";
            $string .= '
            <a href="http://www.' . $site->url . '" target="_blank" title="' . $purchasedLink->keyword . '">' . $purchasedLink->keyword . '</a>';
        }
        $string .= "
</div>";
        return $string;
    }
}
