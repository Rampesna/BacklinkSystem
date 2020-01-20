<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AuthenticationController extends BaseController
{
    function login(){
        return view('authentication.login');
    }
    function login2(){
        return view('authentication.login2');
    }
    function register(){
        return view('authentication.register');
    }
    function forgotpassword(){
        return view('authentication.forgotpassword');
    }
    function page404(){
        return view('authentication.page404');
    }
    function maintenance(){
        return view('authentication.maintenance');
    }
    function comingsoon(){
        return view('authentication.comingsoon');
    }    
}