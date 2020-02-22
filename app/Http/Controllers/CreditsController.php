<?php

namespace App\Http\Controllers;

use App\Models\SalesTableModel;
use App\Models\UsersTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CreditsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function creditAppeals()
    {
        $getAppeals = SalesTableModel::where('status','waiting')->get();
        return view('Pages.Credits.credit-appeals',compact('getAppeals'));
    }

    public function acceptCreditAppeal(Request $request)
    {
        $appeal = SalesTableModel::find($request->appeal_id);
        $appeal->status = "accepted";
        $appeal->save();

        $user = UsersTableModel::find($request->user_id);
        $user->balance = $user->balance + $appeal->amount;
        $user->save();
        return redirect()->route('credit-appeals');
    }

    public function declineCreditAppeal(Request $request)
    {
        $appeal = SalesTableModel::find($request->appeal_id);
        $appeal->status = "declined";
        $appeal->save();
        return redirect()->route('credit-appeals');
    }

    public function soldCredits()
    {
        $soldCredits = SalesTableModel::where('status','accepted')->orderBy('updated_at','DESC')->get();
        return view('Pages.Credits.sold-credits',compact('soldCredits'));
    }

    public function declinedCredits()
    {
        $declinedCredits = SalesTableModel::where('status','declined')->orderBy('updated_at','DESC')->get();
        return view('Pages.Credits.declined-credits',compact('declinedCredits'));
    }

}
