<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class WidgetController extends BaseController
{
    function widgets(){
        return view('widget.widgets');
    }
}