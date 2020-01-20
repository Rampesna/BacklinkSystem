<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class CardlayoutController extends BaseController
{
    function cards(){
        return view('cardlayout.cards');
    }
}
