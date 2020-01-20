<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ExtraController extends BaseController
{    
    function social(){
        return view('extra.social');
    }
    function news(){
        return view('extra.news');
    }
    function settings(){
        return view('extra.settings');
    }
}