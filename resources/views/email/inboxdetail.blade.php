@extends('layout.master')
@section('parentPageTitle', 'Email')
@section('title', 'Inbox Detail')


@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="mail-inbox">
                <div class="mobile-left">
                    <a href="javascript:void(0);" class="btn btn-primary toggle-email-nav"><i class="fa fa-bars"></i></a>
                </div>
                <div class="body mail-left">
                    <div class="mail-compose m-b-20">
                        <a href="app-compose.html" class="btn btn-danger btn-block btn-round">Compose</a>
                    </div>
                    <div class="mail-side">
                        <ul class="nav">
                            <li class="active"><a href="app-inbox.html"><i class="icon-drawer"></i>Inbox<span class="badge badge-primary float-right">6</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-cursor"></i>Sent<span class="badge badge-warning float-right">6</span></a></li>
                            <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Draft</a></li>
                            <li><a href="javascript:void(0);"><i class="icon-action-redo"></i>Outbox</a></li>                                        
                            <li><a href="javascript:void(0);"><i class="icon-trash"></i>Trash</a></li>
                        </ul>
                        <h3 class="label">Labels</h3>
                        <ul class="nav">
                            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-danger"></i>Workshop</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-info"></i>Private</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-dark"></i>Paypal</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-primary"></i>Comapny</a></li>
                        </ul>
                    </div>
                </div>
                <div class="body mail-right check-all-parent">
                    <div class="mail-detail-full">
                        <div class="mail-action clearfix">
                            <a href="app-inbox.html" class="btn btn-primary btn-sm"><i class="fa fa-arrow-left"></i></a>
                            <a href="javascript:void(0);" class="btn btn-danger btn-sm"><i class="icon-trash"></i></a>
                            <a href="javascript:void(0);" class="btn btn-light btn-sm hidden-sm"><i class="icon-refresh"></i></a>                                        
                            <div class="btn-group">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-tag"></i></button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Tag 1</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Tag 2</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Tag 3</a>
                                </div>
                            </div>
                        </div>
                        <div class="detail-header">
                            <div class="media">
                                <div class="float-left">
                                    <div class="m-r-20"><img src="../assets/images/sm/avatar1.jpg" class="rounded" alt=""></div>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0"><strong class="text-muted m-r-5">From :</strong><a class="text-default" href="javascript:void(0);">info@puffintheme.com</a><span class="text-muted text-sm float-right">12:48, 23.06.2018</span></p>
                                    <p class="mb-0"><strong class="text-muted m-r-5">To :</strong>Me <small class="text-muted float-right"><i class="zmdi zmdi-attachment m-r-5"></i>(2 files, 89.2 KB)</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="mail-cnt">
                            <p>Hello <strong>Marshall Nichols</strong>,</p><br>
                            <p>Lorem Ipsum is simply dummy text of only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <ul>
                                <li>standard dummy text ever since the 1500s, when an unknown printer</li>
                                <li>Lorem Ipsum has been the industry's standard dummy</li>
                            </ul>
                            <p>Thank youm,<br><strong>Michael Bradley</strong></p>
                            <hr>
                            <strong>Click here to</strong>
                            <a class="btn btn-link" href="app-compose.html">Reply</a> or
                            <a class="btn btn-link" href="app-compose.html">Forward</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script>
    $('.toggle-email-nav').on('click', function() {
		$('.mail-left').toggleClass('open');
	});
</script>
@stop