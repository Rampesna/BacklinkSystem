<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ComponentsController extends BaseController
{
    function bootstrap(){
        return view('components.bootstrap');
    }
    function typography(){
        return view('components.typography');
    }
    function colors(){
        return view('components.colors');
    }
    function buttons(){
        return view('components.buttons');
    }
    function tabs(){
        return view('components.tabs');
    }
    function progressbars(){
        return view('components.progressbars');
    }
    function modals(){
        return view('components.modals');
    }
    function notifications(){
        return view('components.notifications');
    }
    function dialogs(){
        return view('components.dialogs');
    }
    function listgroup(){
        return view('components.listgroup');
    }
    function mediaobject(){
        return view('components.mediaobject');
    }
    function nestable(){
        return view('components.nestable');
    }
    function rangesliders(){
        return view('components.rangesliders');
    }
    function helperclass(){
        return view('components.helperclass');
    }
}