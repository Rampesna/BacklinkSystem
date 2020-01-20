<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class IconController extends BaseController
{
    function fontawesome(){
        return view('icon.fontawesome');
    }
    function iconsline(){
        return view('icon.iconsline');
    }
    function themify(){
        return view('icon.themify');
    }
}