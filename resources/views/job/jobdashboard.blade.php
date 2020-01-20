@extends('layout.master')
@section('parentPageTitle', 'Job ')
@section('title', 'Dashboard')


@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card w_card3">
            <div class="body">
                <div class="text-center"><i class="fa fa-instagram"></i>
                    <h5 class="m-t-20 mb-0">104 Picture</h5>
                    <p class="text-muted">New Followers</p>
                    <a href="javascript:void(0);" class="btn btn-info btn-round">Job Post</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card w_card3">
            <div class="body">
                <div class="text-center"><i class="fa fa-youtube-square"></i>
                    <h5 class="m-t-20 mb-0">813 Point</h5>
                    <p class="text-muted">New Subscribe</p>
                    <a href="javascript:void(0);" class="btn btn-info btn-round">Job Post</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card w_card3">
            <div class="body">
                <div class="text-center"><i class="fa fa-twitter"></i>
                    <h5 class="m-t-20 mb-0">3,756</h5>
                    <p class="text-muted">New Followers</p>
                    <a href="javascript:void(0);" class="btn btn-info btn-round">Job Post</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card w_card3">
            <div class="body">
                <div class="text-center"><i class="fa fa-facebook-square"></i>
                    <h5 class="m-t-20 mb-0">3,756</h5>
                    <p class="text-muted">New Like</p>
                    <a href="javascript:void(0);" class="btn btn-info btn-round">Job Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Job View</h2>
            </div>
            <div class="body">
                <div class="row text-center">
                    <div class="col-lg-4 col-sm-12 border-right pb-4 pt-4">
                        <label class="mb-0 font-10">All Time</label>
                        <h4 class="font-20 font-weight-bold">2,025</h4>
                    </div>
                    <div class="col-lg-4 col-sm-12 border-right pb-2 pt-4">
                        <label class="mb-0 font-10">Last Month</label>
                        <h4 class="font-20 font-weight-bold">754</h4>
                    </div>
                    <div class="col-lg-4 col-sm-12 pb-4 pt-4">
                        <label class="mb-0 font-10">Today</label>
                        <h4 class="font-20 font-weight-bold">54</h4>
                    </div>
                </div>
                <hr>
                <div class="mb-4 mt-3">
                    <label class="d-block">Biology - BIO<span class="float-right">77%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="d-block">Business Analysis - BUS<span class="float-right">50%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="d-block">Computer Technology - CT <span class="float-right">69%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%;"></div>
                    </div>
                </div>
                <div class="mb-0">
                    <label class="d-block">Management - MGT <span class="float-right">23%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>            
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Current job Openings</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-custom spacing5 mb-0">
                    <tbody>
                        <tr>
                            <td class="w40">
                                <img src="../assets/images/flag/us.svg " class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>United States</small>
                                <h5 class="mb-0">434</h5>
                            </td>
                            <td>
                                <span class="chart">5,3,7,8,6,1,4,9</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../assets/images/flag/au.svg" class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>Australia</small>
                                <h5 class="mb-0">215</h5>
                            </td>
                            <td>
                                <span class="chart">4,2,2,5,6,9,8,1</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../assets/images/flag/ca.svg" class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>Canada</small>
                                <h5 class="mb-0">105</h5>
                            </td>
                            <td>
                                <span class="chart">7,5,3,9,5,1,4,6</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../assets/images/flag/gb.svg" class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>United Kingdom</small>
                                <h5 class="mb-0">250</h5>
                            </td>
                            <td>
                                <span class="chart">3,5,6,4,9,5,5,2</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../assets/images/flag/nl.svg" class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>Netherlands</small>
                                <h5 class="mb-0">52</h5>
                            </td>
                            <td>
                                <span class="chart">8,2,1,5,6,3,4,9</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Top Locations</h2>
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
                <div id="world-map-markers" class="jvector-map" style="height: 330px;"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Recent Applicants</h2>
                <ul class="header-dropdown dropdown">
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
            <div class="table-responsive">
                <table class="table table-hover js-basic-example dataTable table-custom spacing5 mb-0">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Apply for</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w60">
                                <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                            </td>
                            <td>
                                <div class="font-15">Marshall Nichols</div>
                                <span class="text-muted">marshall-n@gmail.com</span>
                            </td>
                            <td><span>Full-stack developer</span></td>
                            <td>24 Jun, 2015</td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-info btn-round">Interview</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w60">
                                <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                            </td>
                            <td>
                                <div class="font-15">Susie Willis</div>
                                <span class="text-muted">sussie-w@gmail.com</span>
                            </td>
                            <td><span>Designer</span></td>
                            <td>28 Jun, 2015</td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-info btn-round">Interview</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w60">
                                <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                            </td>
                            <td>
                                <div class="font-15">Debra Stewart</div>
                                <span class="text-muted">debra@gmail.com</span>
                            </td>
                            <td><span>Project Manager</span></td>
                            <td>21 July, 2015</td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-danger btn-round">Cancel</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w60">
                                <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                            </td>
                            <td>
                                <div class="font-15">Francisco Vasquez</div>
                                <span class="text-muted">francisv@gmail.com</span>
                            </td>
                            <td><span>Senior Developer</span></td>
                            <td>18 Jan, 2016</td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-info btn-round">Interview</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="w60">
                                <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                            </td>
                            <td>
                                <div class="font-15">Jane Hunt</div>
                                <span class="text-muted">jane-hunt@gmail.com</span>
                            </td>
                            <td><span>Front-end Developer</span></td>
                            <td>08 Mar, 2016</td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-success btn-round">Interviewed</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card c_grid c_yellow">
            <div class="body">
                <div class="circle">
                    <img class="rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                </div>
                <div class="text-center mb-5">
                    <h6 class="mt-3 mb-0">Michelle Green</h6>
                    <span>jason-porter@info.com</span>
                    <ul class="mt-3 list-unstyled d-flex justify-content-center">
                        <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                        <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="card-text">
                    <div class="mt-0">
                        <small class="float-right text-muted">60%</small>
                        <span>Bootstrap</span>
                        <div class="progress progress-xxs">
                            <div style="width: 60%;" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <small class="float-right text-muted">85%</small>
                        <span>HTML</span>
                        <div class="progress progress-xxs">
                            <div style="width: 85%;" class="progress-bar bg-green"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <small class="float-right text-muted">40%</small>
                        <span>CSS</span>
                        <div class="progress progress-xxs">
                            <div style="width: 40%;" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <small class="float-right text-muted">80%</small>
                        <span>Javascript</span>
                        <div class="progress progress-xxs">
                            <div style="width: 80%;" class="progress-bar bg-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/jobdashboard.js') }}"></script>
@stop