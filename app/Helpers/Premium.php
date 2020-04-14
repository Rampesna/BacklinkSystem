<?php
/**
 * Makes a request to AWIS for site info.
 */

namespace App\Helpers;

use Illuminate\Http\Request;

class Premium
{

    protected $googleSearchApiKey;
    protected $customSearchBaseUrl;
    protected $cx;

    public function __construct()
    {
        $this->googleSearchApiKey = env("GOOGLE_SEARCH_API_KEY");
        $this->customSearchBaseUrl = "https://www.googleapis.com/customsearch/v1?";
        $this->cx = env("GOOGLE_SEARCH_CX");
    }

    public function findGooglePositionLikeKeyword($queryString,$url)
    {
        $paramsArray = array (
            'key' => $this->googleSearchApiKey,
            'cx' => $this->cx,
            'q' => $queryString,
            'alt' => 'json'
        );
        $params = http_build_query($paramsArray);
        $result = file_get_contents($this->customSearchBaseUrl . $params);
        $decodedResult = json_decode($result, true);
        $collectedResult = collect($decodedResult);
        $location = 0;
        $counter = 0;
        foreach ($collectedResult["items"] as $item){
            $counter += 1;
            $control = strstr($item["displayLink"], $url);
            if($control !== false){
                $location = $counter;
                break;
            }
        }
        return $collectedResult;
    }

    public function googleIndexCount($url)
    {
        $paramsArray = array (
            'key' => $this->googleSearchApiKey,
            'cx' => $this->cx,
            'q' => "site:".$url,
            'alt' => 'json'
        );
        $params = http_build_query($paramsArray);
        $result = file_get_contents($this->customSearchBaseUrl . $params);
        $decodedResult = json_decode($result, true);
        $collectedResult = collect($decodedResult);
//        return $collectedResult["searchInformation"]["formattedTotalResults"];
        return $collectedResult;
    }

}


?>
