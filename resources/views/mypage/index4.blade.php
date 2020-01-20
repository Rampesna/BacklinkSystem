@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Web Analytics')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body w_summary">
                <div class="c_know mt-1 mr-3">
                    <input type="text" class="knob" value="34" data-width="45" data-height="45" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#9367B4">
                </div>
                <div class="s_detail">
                    <h4 class="mb-0">34.80%</h4>
                    <span>% New Sessions</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body w_summary">
                <div class="s_chart">
                    <span class="chart">3,5,1,6,2,4,8,5,3,2</span>
                </div>
                <div class="s_detail">
                    <h4 class="mb-0">23.15%</h4>
                    <span>Bounce Rate</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body w_summary">
                <div class="c_know mt-1 mr-3">
                    <input type="text" class="knob" value="57" data-width="45" data-height="45" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#9367B4">
                </div>
                <div class="s_detail">
                    <h4 class="mb-0">1258</h4>
                    <span>Pages/Session</span>
                </div>
            </div>
        </div>
    </div>                
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body w_summary">
                <div class="s_chart">
                    <span class="chart">8,5,2,9,6,3,4,5,6,7</span>
                </div>
                <div class="s_detail">
                    <h4 class="mb-0">1025</h2>
                    <span>Sessions</span>
                </div>
            </div>
        </div>
    </div>                            
</div>

<div class="row clearfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-0">Audience Metrics</h6>                                    
                    </div>
                    <ul class="nav nav-tabs2">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#today">Today</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-week">Week</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-month">Month</a></li>
                    </ul>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <small>Audience It is a long established fact that a reader will be distracted</small>
                        <div class="d-flex justify-content-start mt-3">
                            <div class="mr-5">
                                <label class="mb-0">Users</label>
                                <h4>9,231</h4>
                            </div>
                            <div>
                                <label class="mb-0">Sessions</label>
                                <h4>10,850</h4>
                            </div>
                        </div>
                        <div id="chart-donut" style="height: 250px"></div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12">
                        <div id="flotChart" class="flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-xl-3 col-lg-4 col-md-">
        <div class="card">
            <div class="body">
                <h6 class="mb-4 font300">Page Impressions</h6>
                <h3 class="mb-0 mt-3 font300">24,301 <span class="text-green font-15">+3.7%</span></h3>
                <small>The total number of Page Impressions within the date range</small>
                <div id="chart-bar-stacked" style="height: 280px"></div>                            
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-lg-4 col-md-6">
        <div class="card">
            <div class="body">                            
                <h6 class="mb-4 font300">Sessions by Channel</h6>                            
                <div class="d-flex justify-content-start">
                    <div class="mr-4">
                        <h3 class="mb-0 mt-3 font300">3,095</h3>
                        <small>Organic Search</small>
                    </div>
                    <div class="mr-4">
                        <h3 class="mb-0 mt-3 font300">2,763</h3>
                        <small>Referral</small>
                    </div>
                    <div>
                        <h3 class="mb-0 mt-3 font300">763</h3>
                        <small>Other</small>
                    </div>
                </div>
                <div id="chart-area-spline-sracked" style="height: 285px"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="card w_card3">
            <div class="body">
                <div class="text-center"><i class="icon-picture text-info"></i>
                    <h4 class="m-t-25 mb-0">104 Picture</h4>
                    <p>Your gallery download complete</p>
                    <a href="javascript:void(0);" class="btn btn-info btn-round">Download now</a>
                </div>
            </div>
        </div>
        <div class="card w_card3">
            <div class="body">
                <div class="text-center"><i class="icon-social-twitter text-primary"></i>
                    <h4 class="m-t-25 mb-0">3,756</h4>
                    <p>New Followers on Twitter</p>
                    <a href="javascript:void(0);" class="btn btn-primary btn-round">Find more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Visitor's Locations</h2>
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
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12">
                        <ul class="nav nav-tabs3">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#TODAY">TODAY</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#THIS-WEEK">WEEK</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#THIS-MONTH">MONTH</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="TODAY">
                                <div class="big-text">
                                    <h2>831</h2>
                                </div>
                                <span>VISITORS OPERATING SYSTEM</span>
                                <hr>                                
                                <div class="form-group mb-4">
                                    <label class="d-block">macOS <span class="float-right">77% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-azura" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="d-block">Windows <span class="float-right">50% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="d-block">Linux <span class="float-right">23% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="d-block">Ubuntu <span class="float-right">78% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="THIS-WEEK">
                                <div class="big-text">
                                    <h2>1,580</h2>
                                </div>
                                <span>VISITORS OPERATING SYSTEM</span>
                                <hr>                                
                                <div class="form-group mb-4">
                                    <label class="d-block">macOS <span class="float-right">62% <i class="fa fa-long-arrow-down"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-azura" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="d-block">Windows <span class="float-right">50% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="d-block">Linux <span class="float-right">42% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="d-block">Ubuntu <span class="float-right">78% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="THIS-MONTH">
                                <div class="big-text">
                                    <h2>4,305</h2>
                                </div>
                                <span>VISITORS OPERATING SYSTEM</span>
                                <hr>                                
                                <div class="form-group mb-4">
                                    <label class="d-block">macOS <span class="float-right">77% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-azura" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="d-block">Windows <span class="float-right">62% <i class="fa fa-long-arrow-up"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="d-block">Linux <span class="float-right">11% <i class="fa fa-long-arrow-down"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100" style="width: 11%;"></div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <label class="d-block">Ubuntu <span class="float-right">31% <i class="fa fa-long-arrow-down"></i></span></label>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100" style="width: 31%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div id="world-map-markers" class="v_locations jvector-map main-map"></div>
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
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index4.js') }}"></script>
@stop