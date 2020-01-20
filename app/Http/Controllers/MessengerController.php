<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class MessengerController extends BaseController
{
    function chat(){
        return view('messenger.chat');
    }
}
