@extends('layout.master')
@section('parentPageTitle', 'Project')
@section('title', 'Ticket Details')


@section('content')
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card c_grid c_yellow">
            <div class="body text-center">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                </div>
                <h6 class="mt-3 mb-0">Michelle Green</h6>
                <span>jason-porter@info.com</span>
                <ul class="mt-3 list-unstyled d-flex justify-content-center">
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                    <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <button class="btn btn-default btn-sm">Follow</button>
                <button class="btn btn-default btn-sm">Message</button>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Ticket Details</h2>
            </div>
            <div class="body">
                <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</span>
            </div>                        
        </div>
        <div class="card">
            <div class="header">
                <h2>Ticket Info</h2>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <small class="text-muted">Title: </small>
                    <p class="mb-0">Oculux Admin Template</p>
                </li>
                <li class="list-group-item">
                    <small class="text-muted">Department: </small>
                    <p  class="mb-0">Pre-Sales</p>
                </li>
                <li class="list-group-item">
                        <small class="text-muted">Product: </small>
                        <p  class="mb-0">Oculux Side Menu Open OnClick</p>
                    </li>
                <li class="list-group-item">
                    <small class="text-muted">Date: </small>
                    <p  class="mb-0">07 Feb 2019</p>
                </li>
                <li class="list-group-item">
                    <div>In Progress</div>
                    <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-3">
                        <div class="progress-bar" data-transitiongoal="67" aria-valuenow="67" style="width: 0%;"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="body">
                <div class="summernote">
                    Hi there,
                    <br/>
                    <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                    <br/>
                    <p>Thank you!</p>
                    <h6>Summer Note</h6>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Ticket Replies</h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="timeline">
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Feb 15, 2015</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Parramatta WordPress Meetup</h3>
                            <p class="text-muted mt-0 mb-0">@ 6:00 pm - 9:00 pm Bay Area, San Francisco</p>
                            <small>(4,325 tickets sold) <span class="text-danger">Sold Out</span></small>
                            <p>Welcome to the Parramatta chapter of the WP <a href="#">Sydney</a> Meetup[...]</p>
                            <ul class="list-unstyled team-info sm margin-0">
                                <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li class="ml-2"><span>5k +</span></li>
                            </ul>
                        </div>
                    </li>

                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>Feb 23, 2018</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Women’s Javascript Study Group</h3>
                            <p class="text-muted mt-0 mb-0">@ 7:00 pm - 10:00 pm Singapore</p>
                            <small>(2,325 tickets sold) <span class="text-danger">Sold Out</span></small>
                            <p>Overview We're a group of women who want to learn JavaScript[...]</p>
                            <ul class="list-unstyled team-info sm margin-0">
                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                <li class="ml-2"><span>2k +</span></li>
                            </ul>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 02, 2018</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Santa Cruz WordPress Monthly Meetup</h3>
                            <p class="text-muted mt-0 mb-0">@ 7:00 pm - 10:00 pm Singapore</p>
                            <small>(20,512 tickets sold) <span class="text-danger">Sold Out</span></small>
                            <p>We will provide an opportunity for learning, collaboration[...]</p>
                            <ul class="list-unstyled team-info sm margin-0">
                                <li><img src="../assets/images/xs/avatar10.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                <li class="ml-2"><span>10k +</span></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>
@stop