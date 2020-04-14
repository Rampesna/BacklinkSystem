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
        $tr = array('ş', 'Ş', 'ı', 'I', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'Ç', 'ç', '(', ')', '/', ':', ',');
        $eng = array('s', 's', 'i', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c', '', '', '-', '-', '');
        $string = str_replace($tr, $eng, $string);
        $string = strtolower($string);
        $string = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $string);
        $string = preg_replace('/\s+/', '-', $string);
        $string = preg_replace('|\'+|', '', $string);
        $string = preg_replace('|-+|', '-', $string);
        $string = preg_replace('/#/', '', $string);
//        $string = str_replace('.', '', $string);
//        $string = trim($string, '-');
        return $string;
    }

    public static function calculateDateDiff($dateOne, $dateTwo)
    {
        $dateOneCarbon = \Carbon\Carbon::parse($dateOne);
        $dateTwoCarbon = \Carbon\Carbon::parse($dateTwo);

        $diffInYears = $dateOneCarbon->diffInYears($dateTwoCarbon, true);
        if ($diffInYears > 0) {
            return $diffInYears . " Yıl Önce";
        } else {
            $diffInMonths = $dateOneCarbon->diffInMonths($dateTwoCarbon, true);
            if ($diffInMonths > 0) {
                return $diffInMonths . " Ay Önce";
            } else {
                $diffInDays = $dateOneCarbon->diffInDays($dateTwoCarbon, true);
                if ($diffInDays > 0) {
                    return $diffInDays . " Gün Önce";
                } else {
                    $diffInHours = $dateOneCarbon->diffInHours($dateTwoCarbon, true);
                    if ($diffInHours > 0) {
                        return $diffInHours . " Saat Önce";
                    } else {
                        $diffInMinutes = $dateOneCarbon->diffInMinutes($dateTwoCarbon, true);
                        if ($diffInMinutes > 0) {
                            return $diffInMinutes . " Dakika Önce";
                        } else {
                            $diffInSeconds = $dateOneCarbon->diffInSeconds($dateTwoCarbon, true);
                            if ($diffInSeconds > 0) {
                                return $diffInSeconds . " Saniye Önce";
                            } else {
                                return "Bilinmiyor";
                            }
                        }
                    }
                }
            }
        }
    }

    public static function phoneNumberReconstitute($phone)
    {
        return "+90 (" . substr($phone, 0, 3) . ") " . substr($phone, 3, 3) . " " . substr($phone, 6, 4);
    }

    public static function clearLink($url)
    {
        $newUrl = preg_replace('/^www\./', '', $url);
        return $newUrl;
    }

    public static function getIpAddress()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}

?>
