<?php
/**
 * Makes a request to AWIS for site info.
 */

namespace App\Helpers;

use App\Models\CustomerLogsTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class General
{

    public static function trimUrl($string)
    {
        $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
        $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','');
        $string = str_replace($tr,$eng,$string);
        $string = strtolower($string);
        $string = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $string);
        $string = preg_replace('/\s+/', '-', $string);
        $string = preg_replace('|-+|', '-', $string);
        $string = preg_replace('/#/', '', $string);
//        $string = str_replace('.', '', $string);
//        $string = trim($string, '-');
        return $string;
    }

}


?>
