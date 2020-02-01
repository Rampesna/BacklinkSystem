<?php

namespace App\Http\Controllers;

use App\Models\UsersTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allAccounts()
    {
        $allAccounts = UsersTableModel::where('is_admin',0)->get();
        return view('Pages.Accounts.all-accounts',compact('allAccounts'));
    }

    public function accountDetail($id)
    {
        $account = UsersTableModel::find(Crypt::decrypt($id));
        return view('Pages.Accounts.account-detail',compact('account'));
    }
}
