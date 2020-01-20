@extends('layout.master')
@section('parentPageTitle', 'HR ')
@section('title', 'Dashboard')


@section('content')
<div class="row clearfix">
    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <div class="body ribbon">
                <div class="ribbon-box green">5</div>
                <a href="{{route('hr.users')}}" class="my_sort_cut text-muted">
                    <i class="icon-users"></i>
                    <span>Users</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <div class="body">
                <a href="{{route('hr.holidays')}}" class="my_sort_cut text-muted">
                    <i class="icon-like"></i>
                    <span>Holidays</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <div class="body ribbon">
                <div class="ribbon-box orange">8</div>
                <a href="{{route('hr.events')}}" class="my_sort_cut text-muted">
                    <i class="icon-calendar"></i>
                    <span>Events</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <div class="body">
                <a href="{{route('hr.payroll')}}" class="my_sort_cut text-muted">
                    <i class="icon-credit-card"></i>
                    <span>Payroll</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <div class="body">
                <a href="{{route('hr.accounts')}}" class="my_sort_cut text-muted">
                    <i class="icon-calculator"></i>
                    <span>Accounts</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
        <div class="card">
            <div class="body">
                <a href="{{route('hr.report')}}" class="my_sort_cut text-muted">
                    <i class="icon-pie-chart"></i>
                    <span>Report</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Employee Structure</h2>
            </div>
            <div class="body text-center">
                <div id="chart-bar-stacked" style="height: 130px"></div>
                <hr>
                <div class="row clearfix">
                    <div class="col-6">
                        <h6 class="mb-0">50</h6>
                        <small class="text-muted">Male</small>
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">17</h6>
                        <small class="text-muted">Female</small>
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
                <h2>Employee Satisfaction</h2>
            </div>
            <div class="body text-center">
                <div id="chart-area-spline-sracked" style="height: 130px"></div>
                <hr>
                <div class="row clearfix">
                    <div class="col-6">
                        <h6 class="mb-0">195</h6>
                        <small class="text-muted">Last Month</small>
                    </div>
                    <div class="col-6">
                        <h6 class="mb-0">163</h6>
                        <small class="text-muted">This Month</small>
                    </div>
                </div>
            </div>                        
        </div>
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-muted"><i class="icon-user"></i></div>
                <h3 class="mb-1">13</h3>
                <div>New Employee</div>
            </div>
        </div>

    </div>
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Salary Statistics</h2>
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
                <small class="text-muted">Salary Statistics Performance on this year</small>
                <div id="flotChart" class="flot-chart"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Employee Performance</h2>
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
                            <th>#</th>
                            <th>Name</th>
                            <th>Employee ID</th>
                            <th>Phone</th>
                            <th>Join Date</th>
                            <th>Role</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w60">
                                <label class="fancy-checkbox">
                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                                <div class="avtar-pic w35 bg-red" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                            </td>
                            <td>
                                <div class="font-15">Marshall Nichols</div>
                                <span class="text-muted">marshall-n@gmail.com</span>
                            </td>
                            <td><span>LA-0215</span></td>
                            <td><span>+ 264-625-2583</span></td>
                            <td>24 Jun, 2015</td>
                            <td>Web Designer</td>
                            <td>
                                <span class="chart">5,3,-7,8,-6,1,4,9</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w60">
                                <label class="fancy-checkbox">
                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                                <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                            </td>
                            <td>
                                <div class="font-15">Susie Willis</div>
                                <span class="text-muted">sussie-w@gmail.com</span>
                            </td>
                            <td><span>LA-0216</span></td>
                            <td><span>+ 264-625-2583</span></td>
                            <td>28 Jun, 2015</td>
                            <td>Web Developer</td>
                            <td>
                                <span class="chart">5,3,7,8,6,1,4,9</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w60">
                                <label class="fancy-checkbox">
                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                                <div class="avtar-pic w35 bg-pink" data-toggle="tooltip" data-placement="top" title="Avatar Name"><span>MN</span></div>
                            </td>
                            <td>
                                <div class="font-15">Debra Stewart</div>
                                <span class="text-muted">debra@gmail.com</span>
                            </td>
                            <td><span>LA-0218</span></td>
                            <td><span>+ 264-625-2583</span></td>
                            <td>21 July, 2015</td>
                            <td>Web Developer</td>
                            <td>
                                <span class="chart">-5,3,7,8,6,1,4,9</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w60">
                                <label class="fancy-checkbox">
                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                                <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                            </td>
                            <td>
                                <div class="font-15">Francisco Vasquez</div>
                                <span class="text-muted">francisv@gmail.com</span>
                            </td>
                            <td><span>LA-0222</span></td>
                            <td><span>+ 264-625-2583</span></td>
                            <td>18 Jan, 2016</td>
                            <td>Team Leader</td>
                            <td>
                                <span class="chart">5,3,7,8,6,1,-4,9</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w60">
                                <label class="fancy-checkbox">
                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                                <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="w35 h35 rounded">
                            </td>
                            <td>
                                <div class="font-15">Jane Hunt</div>
                                <span class="text-muted">jane-hunt@gmail.com</span>
                            </td>
                            <td><span>LA-0232</span></td>
                            <td><span>+ 264-625-2583</span></td>
                            <td>08 Mar, 2016</td>
                            <td>Android Developer</td>
                            <td>
                                <span class="chart">5,-3,7,8,6,-1,4,9</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
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
<script src="{{ asset('assets/js/hrdashboard.js') }}"></script>
@stop