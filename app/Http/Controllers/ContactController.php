<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ContactController extends BaseController
{
    function contact(){
        return view('contact.contact');
    }
    function contact2(){
        return view('contact.contact2');
    }
}
