<?php
/**
 * Makes a request to AWIS for site info.
 */

namespace App\Helpers;

use App\Models\CustomerLogsTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogSystem
{

    public static function createNewLog($transaction,$detail)
    {
        if (Auth::check()){
            $user = Auth::user();
            $ipAddress = \request()->ip();
            $newLog = new CustomerLogsTableModel;
            $newLog->user_id = $user->id;
            $newLog->username = $user->username;
            $newLog->transaction = $transaction;
            $newLog->detail = $detail;
            $newLog->ip_address = $ipAddress;
            $newLog->save();
            return true;
        }else{
            return false;
        }
    }

}


?>
