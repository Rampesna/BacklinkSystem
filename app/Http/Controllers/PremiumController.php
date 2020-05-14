<?php

namespace App\Http\Controllers;

use App\Helpers\Premium;
use App\Models\EmailVerificationsTableModel;
use App\Models\LinksTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\SalesTableModel;
use App\Models\UserSitesTableModel;
use App\Models\UsersTableModel;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use GuzzleHttp\Client;
use http\Client\Response;

class PremiumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $new = new Premium;
        $keywordRank = $new->findGooglePositionLikeKeyword("malatya web tasarim","cinarwbh.com");
        $googleIndexCount = $new->googleIndexCount("cinarwbh.com");
        $returnObject = "cinarwbh.com Sitesi " . "malatya web tasarim" . " Kelimesinde " . $keywordRank . ". Sırada<br>" . "Google'da " . $googleIndexCount . "Adet Index'i Var.";
        return $googleIndexCount;
    }

    public function metadata()
    {
        try {
            $tags = get_meta_tags('cinarwbh.com/');
        }catch (\Exception $exception){
            $tags = get_meta_tags('https://www.cinarwbh.com/');
        }


        return $tags;
    }

    public function links()
    {
        $internals = 0;
        $externals = 0;
        $domain = 'cinarwbh.com';
        $html = file_get_contents('https://www.'.$domain);
        $htmlDom = new DOMDocument;
        @$htmlDom->loadHTML($html);
        $links = $htmlDom->getElementsByTagName('a');
        $extractedLinks = array();
        foreach($links as $link){
            $linkText = $link->nodeValue;
            $linkHref = $link->getAttribute('href');
            if(strlen(trim($linkHref)) == 0){
                continue;
            }
            if($linkHref[0] == '#'){
                continue;
            }
            if(strstr($linkHref,$domain)){
                $internals += 1;
            }else{
                $externals += 1;
            }
            $extractedLinks[] = $linkHref;
        }
        print_r($extractedLinks);
        echo "<br><br><br>";
        print_r($internals);
        echo "<br><br><br>";
        print_r($externals);
    }

}
