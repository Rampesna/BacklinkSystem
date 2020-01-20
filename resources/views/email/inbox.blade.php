@extends('layout.master')
@section('parentPageTitle', 'Email')
@section('title', 'Inbox')


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
                        <a href="{{route('email.compose')}}" class="btn btn-danger btn-block btn-round">Compose</a>
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
                    
                    <div class="mail-action clearfix m-l-15">
                        <div class="pull-left">
                            <div class="fancy-checkbox d-inline-block">
                                <label>
                                    <input class="check-all" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                            </div>
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
                        <div class="pull-right ml-auto">
                            <div class="pagination-email d-flex">
                                <p>1-50/295</p>
                                <div class="btn-group m-l-20">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-left"></i></button>
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mail-list">
                        <ul class="list-unstyled">
                            <li class="clearfix">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star active"><i class="fa fa-star"></i></a>                                                
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar1.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Michael Bradley</a></p>
                                    <p class="dep"><span class="m-r-10">[ThemeForest]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                    <span class="time">23 Jun</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar2.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Megan Duncan</a></p>
                                    <p class="dep"><span class="m-r-10">[Support]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                                </div>
                            </li>
                            <li class="clearfix unread">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar3.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Peter Collins</a></p>
                                    <p class="dep"><span class="m-r-10">[Support]</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span class="time">20 Jun</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar4.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Nathan Hunter</a></p>
                                    <p class="dep"><span class="m-r-10">[CSS]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <span class="time">14 Jun</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar5.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Beverly Oliver</a></p>
                                    <p class="dep"><span class="m-r-10">[GetBootstrap]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry.</p>
                                    <span class="time"><i class="fa fa-paperclip"></i> 11 Jun</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar6.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Nathan Hunter</a></p>
                                    <p class="dep"><span class="m-r-10">[Awwwards]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <span class="time">29 May</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar2.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Megan Duncan</a></p>
                                    <p class="dep"><span class="m-r-10">[Support]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                                </div>
                            </li>
                            <li class="clearfix unread">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar3.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Peter Collins</a></p>
                                    <p class="dep"><span class="m-r-10">[Support]</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <span class="time">20 Jun</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar4.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Nathan Hunter</a></p>
                                    <p class="dep"><span class="m-r-10">[CSS]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <span class="time">14 Jun</span>
                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="md-left">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox-tick">
                                        <span></span>
                                    </label>
                                    <a href="javascript:void(0);" class="mail-star"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="md-right">
                                    <img class="rounded" src="../assets/images/xs/avatar2.jpg" alt="">
                                    <p class="sub"><a href="{{route('email.inboxdetail')}}" class="mail-detail-expand">Megan Duncan</a></p>
                                    <p class="dep"><span class="m-r-10">[Support]</span>There are many variations of passages of Lorem Ipsum available, but the majority</p>
                                    <span class="time"><i class="fa fa-paperclip"></i> 22 Jun</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <ul class="pagination mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
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