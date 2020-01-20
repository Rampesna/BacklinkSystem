@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Dashboard')


@section('content')

<div class="row clearfix">
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6">
                <div class="card-wrapper flip-left">
                    <div class="card s-widget-top">
                        <div class="front p-3 px-4">
                            <div>Income status</div>
                            <div class="py-4 m-0 text-center h2 text-info">$2,258</div>
                            <div class="d-flex">
                                <small class="text-muted">New income</small>
                                <div class="ml-auto">0%</div>
                            </div>
                        </div>
                        <div class="back p-3 px-4 bg-info text-center">
                            <p class="text-light">This Week</p>
                            <span id="minibar-chart2" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card-wrapper flip-left">
                    <div class="card s-widget-top">
                        <div class="front p-3 px-4 bg-danger text-light">
                            <div>Order status</div>
                            <div class="py-4 m-0 text-center h2">428</div>
                            <div class="d-flex">
                                <small>New order</small>
                                <div class="ml-auto"><i class="fa fa-caret-down"></i>10%</div>
                            </div>
                        </div>
                        <div class="back p-3 px-4 text-center">
                            <p>This Week</p>
                            <span id="minibar-chart4" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card-wrapper flip-left">
                    <div class="card s-widget-top">
                        <div class="front p-3 px-4 bg-warning text-light">
                            <div>Customer status</div>
                            <div class="py-4 m-0 text-center h2">232</div>
                            <div class="d-flex">
                                <small>New users</small>
                                <div class="ml-auto"><i class="fa fa-caret-up"></i>3%</div>
                            </div>
                        </div>
                        <div class="back p-3 px-4 text-center">
                            <p>This Week</p>
                            <span id="minibar-chart3" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card-wrapper flip-left">
                    <div class="card s-widget-top">
                        <div class="front p-3 px-4">
                            <div>Total revenue</div>
                            <div class="py-4 m-0 text-center h2 text-success">$9,653</div>
                            <div class="d-flex">
                                <small class="text-muted">Income</small>
                                <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4%</div>
                            </div>
                        </div>
                        <div class="back p-3 px-4 bg-success text-center">
                            <p class="text-light">This Week</p>
                            <span id="minibar-chart1" class="mini-bar-chart"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="form-group mb-4">
                    <label class="d-block">Financials <span class="float-right">77% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-azura" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="d-block">Time to Market <span class="float-right">50% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="d-block">Engagement <span class="float-right">23% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="d-block">Customers <span class="float-right">78% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label class="d-block">Competitors <span class="float-right"> 33% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label class="d-block">Exit Strategy<span class="float-right">88% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-5">
                        <div class="text-center">
                            <input type="text" class="knob" value="77" data-width="68" data-height="68" data-thickness="0.1" data-bgColor="#383b40" data-fgColor="#17C2D7">
                        </div>
                        <label class="mb-0 mt-2">New Users</label>
                        <h4 class="h4 mb-0 font-weight-bold text-cyan">225</h4>
                    </div>
                    <div class="col-12 col-md-2 col-lg-12">
                        <hr class="mt-4 mb-4">
                    </div>
                    <div class="col-lg-12 col-md-5">
                        <div class="text-center">
                            <input type="text" class="knob" value="38" data-width="68" data-height="68" data-thickness="0.1" data-bgColor="#383b40" data-fgColor="#dc3545">
                        </div>
                        <label class="mb-0 mt-2">Return Visitors</label>
                        <h4 class="h4 mb-0 font-weight-bold text-info">124</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Sales This Week</h2>
            </div>
            <div class="body">
                <div id="chart-pie" style="height: 300px"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-6 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Employment Growth</h2>
            </div>
            <div class="body">
                <div id="chart-employment" style="height: 300px"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Overview</h2>
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
                <div id="stackedbar-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Members</h2>
            </div>
            <div class="body">                            
                <div id="chart-bar-stacked" style="height: 200px"></div>
            </div>
            <div class="card-footer text-center">
                <div class="row clearfix">
                    <div class="col-6">
                        <h6>350</h6>
                        <span>Users</span>
                    </div>
                    <div class="col-6">
                        <h6>87</h6>
                        <span>VIP</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Marketing </h2>
            </div>
            <div class="body">
                <div id="chart-area-Marketing" style="height: 200px"></div>
            </div>
            <div class="card-footer text-center">
                <div class="row clearfix">
                    <div class="col-6">
                        <h6>$3,095</h6>
                        <span>Last Month</span>
                    </div>
                    <div class="col-6">
                        <h6>$2,763</h6>
                        <span>This Month</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/chartist.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/toastr/toastr.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index2.js') }}"></script>
@stop