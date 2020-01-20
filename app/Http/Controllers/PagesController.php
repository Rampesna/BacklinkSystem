<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class PagesController extends BaseController
{
    function blank(){
        return view('pages.blank');
    }
    function profile(){
        return view('pages.profile');
    }
    function userlist(){
        return view('pages.userlist');
    }
    function testimonials(){
        return view('pages.testimonials');
    }
    function invoices(){
        return view('pages.invoices');
    }
    function invoicedetails(){
        return view('pages.invoicedetails');
    }
    function timeline(){
        return view('pages.timeline');
    }
    function searchresults(){
        return view('pages.searchresults');
    }
    function gallery(){
        return view('pages.gallery');
    }
    function pricing(){
        return view('pages.pricing');
    }
}