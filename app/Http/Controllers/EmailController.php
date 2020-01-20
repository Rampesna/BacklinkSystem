<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class EmailController extends BaseController
{
    function inbox(){
        return view('email.inbox');
    }
    function compose(){
        return view('email.compose');
    }
    function inboxdetail(){
        return view('email.inboxdetail');
    }
}
