@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Sales Monitoring')


@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                    <div class="ml-4">
                        <span>Total Revenue</span>
                        <h4 class="mb-0 font-weight-medium">$87,805</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-azura text-white rounded-circle"><i class="fa fa-credit-card"></i></div>
                    <div class="ml-4">
                        <span>Total Profit</span>
                        <h4 class="mb-0 font-weight-medium">$53,651</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i></div>
                    <div class="ml-4">
                        <span>Total Cost</span>
                        <h4 class="mb-0 font-weight-medium">$25,805</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-pink text-white rounded-circle"><i class="fa fa-life-ring"></i></div>
                    <div class="ml-4">
                        <span>Total Quantity</span>
                        <h4 class="mb-0 font-weight-medium">$13,651</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="header">
                <h2>This Year's Total Revenue</h2>
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
            <div class="body ribbon">
                <div class="ribbon-box indigo">2019</div>
                <small class="text-muted">Sales Performance for Online and Offline Revenue</small>
                <div id="flotChart" class="flot-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Volume Vs Service Level</h2>
            </div>
            <div class="body text-center">
                <div id="chart-bar-stacked" style="height: 130px"></div>
                <hr>
                <div class="row clearfix">
                    <div class="col-6">
                        <h6 class="mb-0">1,350</h6>
                        <small class="text-muted">Volume</small>
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">587</h6>
                        <small class="text-muted">Service</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="1700">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-value float-right text-muted"><i class="wi wi-fog"></i></div>
                            <h3 class="mb-1">12°C</h3>
                            <div>London</div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-value float-right text-muted"><i class="wi wi-day-cloudy"></i></div>
                            <h3 class="mb-1">18°C</h3>
                            <div>New York</div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-value float-right text-muted"><i class="wi wi-sunrise"></i></div>
                            <h3 class="mb-1">37°C</h3>
                            <div>New Delhi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Customer Satisfaction</h2>
            </div>
            <div class="body text-center">
                <div id="chart-area-spline-sracked" style="height: 130px"></div>
                <hr>
                <div class="row clearfix">
                    <div class="col-6">
                        <h6 class="mb-0">$3,095</h6>
                        <small class="text-muted">Last Month</small>
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">$2,763</h6>
                        <small class="text-muted">This Month</small>
                    </div>
                </div>
            </div>                        
        </div>
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-muted"><i class="icon-bubbles"></i></div>
                <h3 class="mb-1">102</h3>
                <div>Messages</div>
            </div>
        </div>

    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Sales Revenue by Customers in USA</h2>
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
            <small class="text-muted">Sales Performance of all states in the United States</small>
            <div class="body">                            
                <div id="usa" class="jvector-map" style="height: 335px"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Your Top Countries</h2>
            </div>
            <small class="text-muted">Sales performance revenue based by country</small>
            <div class="table-responsive">
                <table class="table table-hover table-custom spacing5 mb-0">
                    <tbody>
                        <tr>
                            <td class="w40">
                                <img src="../assets/images/flag/us.svg " class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>United States</small>
                                <h5 class="mb-0">$5,434</h5>
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
                                <h5 class="mb-0">$2,015</h5>
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
                                <h5 class="mb-0">$1,005</h5>
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
                                <h5 class="mb-0">$2,850</h5>
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
                                <h5 class="mb-0">$1,052</h5>
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
</div>
<div class="row clearfix">
    <div class="col-12">
        <div class="table-responsive">
            <table class="table header-border table-hover table-custom spacing5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product</th>
                        <th>Popularity</th>
                        <th>Sales</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="w60">1</th>
                        <td>Home Decor Range</td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-cyan mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47" style="width: 0%;"></div>
                            </div>
                        </td>
                        <td><span class="badge badge-primary">70%</span>
                        </td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Bathroom Essentials</td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="88" aria-valuenow="88" style="width: 0%;"></div>
                            </div>
                        </td>
                        <td><span class="badge badge-success">70%</span>
                        </td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Disney Princess Pink 18' School Bag</td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-white mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47" style="width: 0%;"></div>
                            </div>
                        </td>
                        <td><span class="badge badge-dark">70%</span>
                        </td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>iPhone XS and XS Max</td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-red mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="62" aria-valuenow="62" style="width: 0%;"></div>
                            </div>
                        </td>
                        <td><span class="badge badge-danger">70%</span>
                        </td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>Apple Smartwatches</td>
                        <td>
                            <div class="progress progress-xxs progress-transparent custom-color-orange mb-0 mt-0">
                                <div class="progress-bar" data-transitiongoal="21" aria-valuenow="21" style="width: 0%;"></div>
                            </div>
                        </td>
                        <td><span class="badge badge-warning">70%</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>               
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index7.js') }}"></script>
@stop