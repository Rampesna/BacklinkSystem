@extends('layout.master')
@section('parentPageTitle', 'HR ')
@section('title', 'Events')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
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
<script src="{{ asset('assets/js/pages/calendar2.js') }}"></script>
@stop