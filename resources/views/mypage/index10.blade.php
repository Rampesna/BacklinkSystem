@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Campaign Monitoring')


@section('content')
<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="body ribbon">
                <div class="ribbon-box pink">2019</div>
                <div class="row text-center">
                    <div class="col-lg-4 col-sm-12 border-right pb-4 pt-4">
                        <label class="mb-0">Total Students</label>
                        <h4 class="font-30 font-weight-bold text-col-blue">2,025</h4>
                    </div>
                    <div class="col-lg-4 col-sm-12 border-right pb-4 pt-4">
                        <label class="mb-0">New Students</label>
                        <h4 class="font-30 font-weight-bold text-col-blue">754</h4>
                    </div>
                    <div class="col-lg-4 col-sm-12 pb-4 pt-4">
                        <label class="mb-0">Teacher or Staff</label>
                        <h4 class="font-30 font-weight-bold text-col-blue">54</h4>
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
                <div class="mb-4">
                    <label class="d-block">Management - MGT <span class="float-right">23%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
                <div class="mb-0">
                    <label class="d-block">Premedical Studies - PMD <span class="float-right">48%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <h6 class="mb-0 font300">Fees Collection</h6>
                <small>The total number of Page Impressions date revenue range.</small>
                <h3 class="mb-4 mt-3 font300">$24,301 <span class="text-green font-15">+3.7%</span></h3>                            
                <div id="chart-bar-stacked" style="height: 262px"></div>                            
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div>Total revenue</div>
                <div class="py-3 m-0 text-center h1 text-success">$79,452</div>
                <div class="d-flex">
                    <small class="text-muted">Income</small>
                    <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4%</div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-muted"><i class="fa fa-graduation-cap"></i></div>
                <h3 class="mb-1">18</h3>
                <div>Total Course</div>
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
</div>
<div class="row clearfix">
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2>University Survey</h2>
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
                <div class="ribbon-box green">2019</div>
                <small class="text-muted">Sales Performance for Online and Offline Revenue</small>
                <div id="University_Survey" class="flot-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Donut Chart</h2>
            </div>
            <div class="body">
                <div class="row text-center">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">Boys</label>
                        <h4 class="font-30">2,025</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">Girls</label>
                        <h4 class="font-30">754</h4>
                    </div>
                </div>
                <div id="chart-donut" style="height: 275px"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Todo List</h2>
            </div>
            <div class="body">
                <div class="media mb-0">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                    <div class="media-body">
                        <h5 class="m-0">Deborah Cox</h5>
                        <p class="text-muted mb-0">Professor</p>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-lg-6 border-right">
                        <label class="mb-0">PROJECTS</label>
                        <h4 class="font-30">13</h4>
                    </div>
                    <div class="col-lg-6">
                        <label class="mb-0">TASKS</label>
                        <h4 class="font-30">17</h4>
                    </div>
                </div>
                <hr>
                <ul class="todo_list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Product Event at New York</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Meeting with Team</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Product Event for new product</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Lunch friends in Sunday</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Meeting with Team</span>
                        </label>
                        <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <div class="header">
                <h2>New Student List</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Assigned Professor</th>
                                <th>Date Of Admit</th>
                                <th>Fees</th>
                                <th>Branch</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jens Brincker</td>
                                <td>Kenny Josh</td>
                                <td>27/05/2016</td>
                                <td>
                                    <span class="label label-sm label-success">paid</span>
                                </td>
                                <td>Mechanical</td>
                                <td>
                                    <a href="javascript:void(0)"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mark Hay</td>
                                <td> Mark</td>
                                <td>26/05/2018</td>
                                <td>
                                    <span class="label label-sm label-warning">unpaid</span>
                                </td>
                                <td>Science</td>
                                <td>
                                    <a href="javascript:void(0)"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Anthony Davie</td>
                                <td>Cinnabar</td>
                                <td>21/05/2018</td>
                                <td>
                                    <span class="label label-sm label-success ">paid</span>
                                </td>
                                <td>Commerce</td>
                                <td>
                                    <a href="javascript:void(0)"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>David Perry</td>
                                <td>Felix </td>
                                <td>20/04/2019</td>
                                <td>
                                    <span class="label label-sm label-danger">unpaid</span>
                                </td>
                                <td>Mechanical</td>
                                <td>
                                    <a href="javascript:void(0)"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Anthony Davie</td>
                                <td>Beryl</td>
                                <td>24/05/2017</td>
                                <td>
                                    <span class="label label-sm label-success ">paid</span>
                                </td>
                                <td>M.B.A.</td>
                                <td>
                                    <a href="javascript:void(0)"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Alan Gilchrist</td>
                                <td>Joshep</td>
                                <td>22/05/2017</td>
                                <td>
                                    <span class="label label-sm label-warning ">unpaid</span>
                                </td>
                                <td>Science</td>
                                <td>
                                    <a href="javascript:void(0)"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Mark Hay</td>
                                <td>Jayesh</td>
                                <td>18/06/2018</td>
                                <td>
                                    <span class="label label-sm label-success ">paid</span>
                                </td>
                                <td>Commerce</td>
                                <td>
                                    <a href="javascript:void(0)"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Sue Woodger</td>
                                <td>Sharma</td>
                                <td>17/05/2019</td>
                                <td>
                                    <span class="label label-sm label-danger">unpaid</span>
                                </td>
                                <td>Mechanical</td>
                                <td>
                                    <a href="javascript:void(0)"><i class="fa fa-check"></i></a>
                                    <a href="javascript:void(0)"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  
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

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index10.js') }}"></script>
@stop