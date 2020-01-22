<?php
/**
 * Makes a request to AWIS for site info.
 */

namespace App\Helpers;

use Illuminate\Http\Request;

class Alexa
{

    // Request Variables
    protected static $url;
    protected static $action;
    protected static $output = "json";
    protected static $responseGroup;
    protected static $start;
    protected static $range;
    protected static $descriptions;
    protected static $path;
    protected static $count;
    protected static $recursive;
    protected static $sortBy;

    protected static $apiKey = "DsKl1Gzn1ZaeKcYTZvJvb8WXM3d0IJdW39KFBABs";
    protected static $baseUrl = "https://awis.api.alexa.com/api?";


    public static function UrlInfo($url)
    {
        $options = [
            "http" => [
                "method" => "GET",
                "header" => "x-api-key: DsKl1Gzn1ZaeKcYTZvJvb8WXM3d0IJdW39KFBABs"
            ]
        ];
        $context = stream_context_create($options);
        $response = file_get_contents(self::$baseUrl."Action=UrlInfo&Output=json&ResponseGroup=Rank,RankByCountry,LinksInCount&Url=".$url, false, $context);
        return json_decode($response);
    }

}


?>
