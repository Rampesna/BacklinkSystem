<?php

namespace App\Http\Controllers;

use App\Models\UsersTableModel;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function allAccounts()
    {
        $allAccounts = UsersTableModel::where('is_admin',0)->get();
        return view('Pages.Accounts.all-accounts',compact('allAccounts'));
    }
}
