@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Notifications')


@section('content')
<div class="row clealfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Popup Positions</h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-sm btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-right">Bottom Right</button>
                <button type="button" class="btn btn-sm btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-left">Bottom Left</button>
                <button type="button" class="btn btn-sm btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-left">Top Left</button>
                <button type="button" class="btn btn-sm btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-right">Top Right</button>
                <button type="button" class="btn btn-sm btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-full-width">Top Full Width</button>
                <button type="button" class="btn btn-sm btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-full-width">Bottom Full Width</button>
                <button type="button" class="btn btn-sm btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="top-center">Top Center</button>
                <button type="button" class="btn btn-sm btn-default btn-toastr" data-context="info" data-message="Hi, I'm here" data-position="bottom-center">Bottom Center</button>
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Message Context</h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-primary btn-toastr" data-context="info" data-message="This is general theme info" data-position="bottom-right">General Info</button>
                <button type="button" class="btn btn-success btn-toastr" data-context="success" data-message="This is success info" data-position="bottom-right">Success Info</button>
                <button type="button" class="btn btn-warning btn-toastr" data-context="warning" data-message="This is warning info" data-position="bottom-right">Warning Info</button>
                <button type="button" class="btn btn-danger btn-toastr" data-context="error" data-message="This is error info" data-position="bottom-right">Error Info</button>
            </div>
        </div>
    </div>
</div>
<div class="row clealfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Callback Events</h2>
            </div>
            <div class="body">
                <button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback1" data-context="info" data-message="onShown and onHidden callback demo">onShown and onHidden</button>
                <button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback2" data-context="info" data-message="Please click me">onclick</button>
                <button type="button" class="btn btn-default btn-toastr-callback" id="toastr-callback3" data-context="info" data-message="Please click close button">onCloseClick</button>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>

<script>
    $(function() {
        toastr.options.timeOut = "false";
        toastr.options.closeButton = true;
        toastr.options.positionClass = 'toast-bottom-right';
        toastr['info']('Hi there, this is notification demo with HTML support. So, you can add HTML elements like <a href="javascript:void(0);">this link</a>');

        $('.btn-toastr').on('click', function() {
            $context = $(this).data('context');
            $message = $(this).data('message');
            $position = $(this).data('position');

            if ($context === '') {
                $context = 'info';
            }

            if ($position === '') {
                $positionClass = 'toast-bottom-right';
            } else {
                $positionClass = 'toast-' + $position;
            }

            toastr.remove();
            toastr[$context]($message, '', {
                positionClass: $positionClass
            });
        });

        $('#toastr-callback1').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "300",
                "onShown": function() {
                    alert('onShown callback');
                },
                "onHidden": function() {
                    alert('onHidden callback');
                }
            };

            toastr['info']($message);
        });

        $('#toastr-callback2').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "10000",
                "onclick": function() {
                    alert('onclick callback');
                },
            };

            toastr['info']($message);

        });

        $('#toastr-callback3').on('click', function() {
            $message = $(this).data('message');

            toastr.options = {
                "timeOut": "10000",
                "closeButton": true,
                "onCloseClick": function() {
                    alert('onCloseClick callback');
                }
            };

            toastr['info']($message);
        });
    });
</script>
@stop