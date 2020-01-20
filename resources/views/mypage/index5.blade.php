@extends('layout.master')
@section('parentPageTitle', 'My Page')
@section('title', 'Event Monitoring')


@section('content')
<div class="row clearfix">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-7">
                        <h5 class="mb-0">3,210</h5>
                        <small class="text-muted">Interested</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">47%</h2>
                    </div>
                    <div class="col-12">                                    
                        <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                            <div class="progress-bar" data-transitiongoal="47" aria-valuenow="47" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-7">
                        <h5 class="mb-0">4,028</h5>
                        <small class="text-muted">Going</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">68%</h2>
                    </div>
                    <div class="col-12">                                    
                        <div class="progress progress-xxs progress-transparent custom-color-yellow mb-0 mt-3">
                            <div class="progress-bar" data-transitiongoal="68" aria-valuenow="88" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-7">
                        <h5 class="mb-0">1,025</h5>
                        <small class="info">Maybe</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">2</h2>
                    </div>
                    <div class="col-12">                                    
                        <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-3">
                            <div class="progress-bar" data-transitiongoal="23" aria-valuenow="23" style="width: 0%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-7">
                        <h5 class="mb-0">523</h5>
                        <small class="text-muted">Not Going</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">2</h2>
                    </div>
                    <div class="col-12">                                    
                        <div class="progress progress-xxs progress-transparent custom-color-purple mb-0 mt-3">
                            <div class="progress-bar" data-transitiongoal="7" aria-valuenow="7" style="width: 0%;"></div>
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
                <h2>Sales Overview </h2>
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
                <div class="d-flex justify-content-start mb-3">
                    <div class="mr-5">
                        <label class="mb-0">Tickets Sold</label>
                        <h4>8,200</h4>
                        <small class="text-muted"><strong>9.5%</strong> of 10,000 Total</small>
                    </div>
                    <div class="mr-5">
                        <label class="mb-0">Tickets Available</label>
                        <h4>1,800</h4>
                        <small class="text-muted"><strong>87.3%</strong> of 10,000 Total</small>
                    </div>
                    <div>
                        <label class="mb-0">Net Revenue</label>
                        <h4>$11,800</h4>
                        <small class="text-muted"><strong>7.3%</strong> of Sales Avg.</small>
                    </div>
                </div>
                <div id="chart-Event-sale-overview" class="chart_shadow" style="height: 300px"></div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Upcoming Events</h2>
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
                            <p class="text-muted mt-0 mb-2">@ 6:00 pm - 9:00 pm Bay Area, San Francisco</p>
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
                            <p class="text-muted mt-0 mb-2">@ 7:00 pm - 10:00 pm Singapore</p>
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
                    
                    <li class="timeline-item period">
                        <div class="timeline-info"></div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h2 class="timeline-title">March 2019</h2>
                        </div>
                    </li>

                    <li class="timeline-item">
                        <div class="timeline-info">
                            <span>April 02, 2018</span>
                        </div>
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">Santa Cruz WordPress Monthly Meetup</h3>
                            <p class="text-muted mt-0 mb-2">@ 7:00 pm - 10:00 pm Singapore</p>
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
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Events Interest</h2>
            </div>
            <div class="body">
                <div id="chart-Events-Interest" style="height: 300px"></div>
            </div>
        </div>                    
        <div class="card">
            <div class="header">
                <h2>Event Calendar</h2>
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
                <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-azura text-white rounded-circle">15</div>
                    <div class="ml-4">
                        <span>Feb 2019</span>
                        <h4 class="mb-0 font-weight-medium">Saturday</h4>
                    </div>
                </div>
                <table class="table table-calendar mb-0 mt-5">
                    <tbody>
                        <tr>
                            <th>Mo</th>
                            <th>Tu</th>
                            <th>We</th>
                            <th>Th</th>
                            <th>Fr</th>
                            <th>Sa</th>
                            <th>Su</th>
                        </tr>
                        <tr>
                            <td class="text-muted">27</td>
                            <td class="text-muted">28</td>
                            <td class="text-muted">29</td>
                            <td class="text-muted">30</td>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td><a href="javascript:void(0)" class="table-calendar-link">4</a></td>
                            <td>5</td>
                            <td><a href="javascript:void(0)" class="table-calendar-link">6</a></td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td><a href="javascript:void(0)" class="table-calendar-link">12</a></td>
                            <td>13</td>
                            <td>14</td>
                            <td><a href="javascript:void(0)">15</a></td>
                            <td>16</td>
                            <td>17</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td><a href="javascript:void(0)" class="table-calendar-link">19</a></td>
                            <td><a href="javascript:void(0)" class="table-calendar-link">20</a></td>
                            <td>21</td>
                            <td>22</td>
                            <td>23</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>26</td>
                            <td>27</td>
                            <td>28</td>
                            <td>29</td>
                            <td>30</td>
                            <td class="text-muted">1</td>
                        </tr>
                    </tbody>
                </table>
            </div>                        
        </div>
        <div class="card">
            <div class="header">
                <h2>Events Members</h2>
            </div>
            <div class="body">                            
                <div id="chart-Members" style="height: 200px"></div>
            </div>
            <div class="card-footer text-center">
                <div class="row clearfix">
                    <div class="col-6">
                        <h6>8,705</h6>
                        <span>User</span>
                    </div>
                    <div class="col-6">
                        <h6>1295</h6>
                        <span>VIP</span>
                    </div>
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

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/index5.js') }}"></script>
@stop