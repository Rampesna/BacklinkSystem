<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ChartsController extends BaseController
{
    function c3(){
        return view('charts.c3');
    }
    function chartjs(){
        return view('charts.chartjs');
    }
    function morris(){
        return view('charts.morris');
    }
    function flot(){
        return view('charts.flot');
    }
    function sparkline(){
        return view('charts.sparkline');
    }
    function knob(){
        return view('charts.knob');
    }
}