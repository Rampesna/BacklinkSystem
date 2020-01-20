<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HrController extends BaseController
{
    function hrdashboard(){
        return view('hr.hrdashboard');
    }
    function users(){
        return view('hr.users');
    }
    function departments(){
        return view('hr.departments');
    }
    function employee(){
        return view('hr.employee');
    }
    function activities(){
        return view('hr.activities');
    }
    function holidays(){
        return view('hr.holidays');
    }
    function events(){
        return view('hr.events');
    }
    function accounts(){
        return view('hr.accounts');
    }
    function payroll(){
        return view('hr.payroll');
    }
    function report(){
        return view('hr.report');
    }
}