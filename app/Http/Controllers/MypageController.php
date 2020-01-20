<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MypageController extends BaseController
{
    function index(){
        return view('mypage.index');
    }


}
