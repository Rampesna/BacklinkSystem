<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TablesController extends BaseController
{
    function normal(){
        return view('tables.normal');
    }
    function color(){
        return view('tables.color');
    }
    function datatable(){
        return view('tables.datatable');
    }
    function editable(){
        return view('tables.editable');
    }
    function filter(){
        return view('tables.filter');
    }
    function dragger(){
        return view('tables.dragger');
    }
}