<?php

namespace App\Http\Controllers;

use App\Helpers\LogSystem;
use App\Helpers\Premium;
use App\Models\AnalysisTableModel;
use App\Models\EmailVerificationsTableModel;
use App\Models\EnemyAnalysisTableModel;
use App\Models\LinksTableModel;
use App\Models\PremiumPackagesTableModel;
use App\Models\PremiumSalesTableModel;
use App\Models\PremiumSitesTableModel;
use App\Models\PurchasedLinksTableModel;
use App\Models\SalesTableModel;
use App\Models\UserNotification;
use App\Models\UserSitesTableModel;
use App\Models\UsersTableModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserNotificationController extends Controller
{
    public function lastNotification(Request $request)
    {
        $user = User::find($request->user_id);
        $last_notification = $user->notifications()->with([
            'notification'
        ])->orderBy('created_at', 'desc')->first();
        if ($last_notification) {
            return response()->json(['status' => 'success', 'data' => $last_notification]);
        } else {
            return response()->json(['status' => 'error', 'data' => 'No notifications']);
        }
    }

    public function setSeen(Request $request)
    {
        $userNotification = UserNotification::find($request->id);
        $userNotification->seen = 1;
        $userNotification->save();
    }
}
