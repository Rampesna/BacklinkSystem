@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Campaign Monitoring')


@section('content')
<div class="row clearfix">
    <div class="col-lg-5 col-md-12 col-sm-12">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card w_card3">
                    <div class="body">
                        <div class="text-center"><i class="fa fa-instagram"></i>
                            <h5 class="m-t-20 mb-0">104 Picture</h5>
                            <p class="text-muted">New Followers</p>
                            <a href="javascript:void(0);" class="btn btn-info btn-round">Find more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card w_card3">
                    <div class="body">
                        <div class="text-center"><i class="fa fa-youtube-square"></i>
                            <h5 class="m-t-20 mb-0">813 Point</h5>
                            <p class="text-muted">New Subscribe</p>
                            <a href="javascript:void(0);" class="btn btn-success btn-round">Find more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card w_card3">
                    <div class="body">
                        <div class="text-center"><i class="fa fa-twitter"></i>
                            <h5 class="m-t-20 mb-0">3,756</h5>
                            <p class="text-muted">New Followers</p>
                            <a href="javascript:void(0);" class="btn btn-primary btn-round">Find more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card w_card3">
                    <div class="body">
                        <div class="text-center"><i class="fa fa-facebook-square"></i>
                            <h5 class="m-t-20 mb-0">3,756</h5>
                            <p class="text-muted">New Like</p>
                            <a href="javascript:void(0);" class="btn btn-primary btn-round">Find more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-12 col-sm-12">
        <div class="card">
            <div class="body">
                <div>Real Time Campaign Metrics Statistics</div>
                <p class="text-muted">The global and country campaign stats show how popular your ad is relative to your other ads.</p>
                <div id="flotChart" class="flot-chart"></div>
            </div>
        </div>
    </div>
</div>                        
<div class="row clearfix">
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Facebook Engaged Users</h2>
            </div>
            <div class="body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="mb-1">Feb 21, 2019 to Feb 28 2019</p>
                        <small class="text-muted">Note Enim omittam, ex quo dictas complectitur</small>
                    </div>
                    <div>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected="">7 Day</option>
                                <option value="1">15 Day</option>
                                <option value="2">1 Month</option>
                                <option value="3">1 Year</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12  mt-4">
                        <span>Engaged Users <span class="text-success">(1%) <i class="fa fa-caret-up"></i></span></span>
                        <h4 class="mb-0">18,254</h4>
                        <small class="text-muted">Vs. 27,540 Pre</small>
                        <div id="chart-Facebook-1" style="height: 60px"></div>
                    </div>
                    <div class="col-lg-6 col-md-12  mt-4">
                        <span>Page Impressions <span class="text-success">(5%) <i class="fa fa-caret-up"></i></span></span>
                        <h4 class="mb-0">1,28,823</h4>
                        <small class="text-muted">Vs. 112,540 Pre</small>
                        <div id="chart-Facebook-2" style="height: 60px"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Facebook Page Likes</h2>
            </div>
            <div class="body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="mb-1">Jan 01, 2019 to Jan 31 2019</p>
                        <small class="text-muted">Note Enim omittam, ex quo dictas complectitur</small>
                    </div>
                    <div>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected="">1 Month</option>
                                <option value="1">15 Day</option>
                                <option value="2">1 Month</option>
                                <option value="3">1 Year</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12  mt-4">
                        <span>Total Page Likes <span class="text-success">(11%) <i class="fa fa-caret-up"></i></span></span>
                        <h4 class="mb-0">42,254</h4>
                        <small class="text-muted">Vs. 27,540 Pre</small>
                        <div id="chart-Facebook-3" style="height: 60px"></div>
                    </div>
                    <div class="col-lg-6 col-md-12  mt-4">
                        <span>New Page Likes <span class="text-success">(7%) <i class="fa fa-caret-up"></i></span></span>
                        <h4 class="mb-0">21,823</h4>
                        <small class="text-muted">Vs. 112,540 Pre</small>
                        <div id="chart-Facebook-4" style="height: 60px"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>YouTube Subscribers (Last Week)</h2>
            </div>
            <div class="body">
                <div id="chart-YouTube-Subscribers" style="height: 210px"></div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Linkedin Key Metrics ( Last 30 Days)</h2>
            </div>
            <div class="body">
                <div id="chart-Linkedin-Metrics" style="height: 60px" class="mb-4"></div>
                <div class="form-group mb-3">
                    <label class="d-block">Clicks <span class="float-right">77% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="d-block">Likes <span class="float-right">50% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <label class="d-block">Shares <span class="float-right">23% <i class="fa fa-long-arrow-up"></i></span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Your Top Countries <small class="text-muted">Campaigns revenue based by country</small></h2>
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
                                <h6 class="mb-0">$5,434</h6>
                            </td>
                            <td>
                                <span class="chart"><canvas width="51" height="35" style="display: inline-block; width: 51px; height: 35px; vertical-align: top;"></canvas></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../assets/images/flag/au.svg" class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>Australia</small>
                                <h6 class="mb-0">$2,015</h6>
                            </td>
                            <td>
                                <span class="chart"><canvas width="51" height="35" style="display: inline-block; width: 51px; height: 35px; vertical-align: top;"></canvas></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../assets/images/flag/ca.svg" class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>Canada</small>
                                <h6 class="mb-0">$1,005</h6>
                            </td>
                            <td>
                                <span class="chart"><canvas width="51" height="35" style="display: inline-block; width: 51px; height: 35px; vertical-align: top;"></canvas></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../assets/images/flag/gb.svg" class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>United Kingdom</small>
                                <h6 class="mb-0">$2,850</h6>
                            </td>
                            <td>
                                <span class="chart"><canvas width="51" height="35" style="display: inline-block; width: 51px; height: 35px; vertical-align: top;"></canvas></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../assets/images/flag/nl.svg" class="w35 rounded-circle">
                            </td>
                            <td>
                                <small>Netherlands</small>
                                <h6 class="mb-0">$1,052</h6>
                            </td>
                            <td>
                                <span class="chart"><canvas width="51" height="35" style="display: inline-block; width: 51px; height: 35px; vertical-align: top;"></canvas></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Email Campaigns <small class="text-muted">Email Campaigns performance based by country</small></h2>
            </div>                        
            <div class="table-responsive">
                <table class="table table-hover table-custom spacing5">
                    <tbody>
                        <tr>
                            <td>
                                <a href="#">Defecting Buyers Email 1</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">1.3MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-azura" style="width: 45%">
                                    </div>
                                    <div class="progress-bar bg-cyan" style="width: 20%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Defecting Buyers Email 2</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">11.3MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-azura" style="width: 45%">
                                    </div>
                                    <div class="progress-bar bg-cyan" style="width: 20%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Defecting Buyers Email 3</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">8.3MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-azura" style="width: 63%">
                                    </div>
                                    <div class="progress-bar bg-cyan" style="width: 24%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 63.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 24.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Defecting Buyers Email 4</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">12.1MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-azura" style="width: 71%">
                                    </div>
                                    <div class="progress-bar bg-cyan" style="width: 8%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 71.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 8.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Defecting Buyers Email 5</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">7.6MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-azura" style="width: 23%">
                                    </div>
                                    <div class="progress-bar bg-cyan" style="width: 41%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 23.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 41.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
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
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/flot-charts/jquery.flot.time.js') }}"></script>
<script src="{{ asset('assets/vendor/flot-charts/jquery.flot.selection.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index9.js') }}"></script>
@stop