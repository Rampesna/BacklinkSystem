@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Finance Performance')


@section('content')

<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-green">
            <div class="card-header">Total Income</div>
            <div class="card-body">
                <div class="pb-4 m-0 text-center h1 text-success">$9,452</div>
                <div class="d-flex">
                    <small class="text-muted">Previous Month</small>
                    <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4.00%</div>
                </div>
            </div>
        </div>
        <div class="card text-white bg-info">
            <div class="card-header">Total Expenses</div>
            <div class="card-body">
                <div class="pb-4 m-0 text-center h1 text-info">$12,258</div>
                <div class="d-flex">
                    <small class="text-muted">Previous Month</small>
                    <div class="ml-auto">0.67%</div>
                </div>
            </div>
        </div>
    </div>                
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div>Gross Profit Margin</div>
                <div class="mt-4 text-center">
                    <input type="text" class="knob" value="34" data-width="147" data-height="147" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#9367B4">
                </div>
                <h3 class="mb-0 mt-3 font300">24,301 <span class="text-green font-15">+3.7%</span></h3>
                <small>Lorem Ipsum is simply dummy text <br> <a href="#">Read more</a> </small>
                <div class="mt-4 text-center">
                    <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="card-value float-right text-blue">+15%</div>
                        <h4 class="mb-1">$5,021.00</h4>
                        <div class="text-muted">Your Balance</div>
                    </div>
                    <div class="card-chart-bg">
                        <span id="linecustom">6,7,5,9,7,8,4,7,6,9,11,16,10,8,9,12</span>
                    </div>
                </div>
                <div class="card">
                    <div class="body top_counter">
                        <div class="icon bg-success text-white"><i class="fa fa-area-chart"></i> </div>
                        <div class="content">
                            <span>Growth</span>
                            <h5 class="number mb-0">62%</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="body top_counter">
                        <div class="icon bg-warning text-white"><i class="fa fa-building"></i> </div>
                        <div class="content">
                            <span>Properties</span>
                            <h5 class="number mb-0">53,251</h5>
                        </div>
                    </div>                        
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="media">
                            <img class="rounded mr-3" src="../assets/images/xs/avatar7.jpg" alt="">
                            <div class="media-body">
                                <h5 class="m-0">Betty Torres</h5>
                                <p class="text-muted mb-0">Account Holder</p>
                            </div>
                        </div>
                        <small class="text-muted">Account Number:- </small>
                        <p>2154 - 1245 - 2185 - 5858</p>
                        <small class="text-muted">Number:- </small>
                        <p>+ 264-625-7262</p>
                        <small class="text-muted">Account:- </small>
                        <p>HDFC Bank</p>
                        <small class="text-muted">Address:- </small>
                        <p>Magnolia St. Orlando, FL 32806</p>                                    
                        <small class="text-muted">Account Type:- </small>
                        <p class="mb-0">Current</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Global Financial Performance</h2>
            </div>
            <div class="body">
                <div id="chart-bar" style="height: 350px"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Short Term Assets</h2>
            </div>
            <div class="body">
                <div id="chart-Short-Term-Assets" style="height: 350px"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Financial Management Review</h2>
            </div>
            <div class="table-responsive">
                <table class="table table-custom spacing5">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Actual Cost</th>
                            <th>Forecast Cost</th>
                            <th>Revenue</th>
                            <th class="w100">% Margin</th>
                            <th>Actual</th>
                            <th class="w100">Forecast</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Building</td>
                            <td>11,243</td>
                            <td>399,21</td>
                            <td>40,234</td>
                            <td><span class="text-green">8.1%</span></td>
                            <td>2,93,098</td>
                            <td>1,02,243</td>
                        </tr>
                        <tr>
                            <td>Digital</td>
                            <td>1,22,877</td>
                            <td>5,00,215</td>
                            <td>40,159</td>
                            <td><span class="text-red">6.4%</span></td>
                            <td>2,93,091</td>
                            <td>9,32,456</td>
                        </tr>
                        <tr>
                            <td>Health</td>
                            <td>32,375</td>
                            <td>99,852</td>
                            <td>20,194</td>
                            <td><span class="text-green">12.9%</span></td>
                            <td>18,654</td>
                            <td>29,201</td>
                        </tr>
                        <tr>
                            <td>Power</td>
                            <td>76,877</td>
                            <td>98,565</td>
                            <td>123,022</td>
                            <td><span class="text-red">17.0%</span></td>
                            <td>10,800</td>
                            <td>22,232</td>
                        </tr>
                        <tr>
                            <td>Transport</td>
                            <td>2,232</td>
                            <td>3,099</td>
                            <td>400</td>
                            <td><span class="text-green">1.2%</span></td>
                            <td>13,255</td>
                            <td>14,765</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>3,33,985</td>
                            <td>4,68,444</td>
                            <td>99,400</td>
                            <td><span class="text-green">34.2%</span></td>
                            <td>28,643,091</td>
                            <td>42,31,765</td>
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
<link rel="stylesheet" href="{{ asset('assets/vendor/morrisjs/morris.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index6.js') }}"></script>
@stop