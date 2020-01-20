@extends('layout.master')
@section('parentPageTitle', 'App')
@section('title', 'Calendar')


@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card c_grid c_pink">
            <div class="body text-center">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar3.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Terry Carter</h6>
                <span>Michelle@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">Follow</button>
                <button class="btn btn-default btn-sm">Message</button>
            </div>
        </div>
        <div class="card text-white bg-info mb-3">
            <div class="card-header">Todo List</div>
            <div class="card-body">
                <ul class="todo_list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Product Event at New York</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Meeting with Team</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Product Event for new product</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Lunch friends in Sunday</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Meeting with Team</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Product Event for new product</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/fullcalendar.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/fullcalendarscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/calendar.js') }}"></script>
@stop