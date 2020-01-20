@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Sweet Alert Ui')


@section('content')
<div class="row clearfix">
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A basic message</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="basic">Click Me</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A title with a text under</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="with-title">Click Me</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A success message!</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="success">Click Me</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>An HTML message</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="html-message">Click Me</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A message with a custom icon</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="with-custom-icon">Click Me</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A message with auto close timer</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="autoclose-timer">Click Me</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <p>A warning message, with a function attached to the <b>Confirm</b> button...</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="confirm">Click Me</button>
            </div>
        </div>
            <div class="card">
            <div class="body">
                <p>A replacement for the <b>prompt</b> function</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="prompt">Click Me</button>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                    <p>With a loader (for AJAX request for example)</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="ajax-loader">Click Me</button>
            </div>
        </div>
        <div class="card">
            <div class="body">
                    <p>... and by passing a parameter, you can execute something else for <b>Cancel</b>.</p>
                <button class="btn btn-primary btn-round js-sweetalert" data-type="cancel">Click Me</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/dialogs.js') }}"></script>
@stop