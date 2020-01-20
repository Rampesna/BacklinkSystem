<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    function index2(){
        return view('dashboard.index2');
    }
    function index3(){
        return view('dashboard.index3');
    }
}
