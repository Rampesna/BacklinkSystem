<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProjectsController extends BaseController
{
    function taskboard(){
        return view('projects.taskboard');
    }
    function projectlist(){
        return view('projects.projectlist');
    }
    function addproject(){
        return view('projects.addproject');
    }
    function ticket(){
        return view('projects.ticket');
    }
    function ticketdetails(){
        return view('projects.ticketdetails');
    }    
    function clients(){
        return view('projects.clients');
    }    
    function todo(){
        return view('projects.todo');
    }    
}