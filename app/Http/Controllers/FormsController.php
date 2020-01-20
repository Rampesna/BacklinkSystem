<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class FormsController extends BaseController
{
    function basic(){
        return view('forms.basic');
    }
    function advanced(){
        return view('forms.advanced');
    }
    function validation(){
        return view('forms.validation');
    }
    function wizard(){
        return view('forms.wizard');
    }
    function summernote(){
        return view('forms.summernote');
    }
    function dragdropupload(){
        return view('forms.dragdropupload');
    }
    function editors(){
        return view('forms.editors');
    }
    function markdown(){
        return view('forms.markdown');
    }
    function cropping(){
        return view('forms.cropping');
    }
}