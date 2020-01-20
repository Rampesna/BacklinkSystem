@extends('layout.master')
@section('parentPageTitle', 'Widgets')
@section('title', 'Ready Widgets')


@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div class="d-flex align-items-center">
                    <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i></div>
                    <div class="ml-4">
                        <span>Total income</span>
                        <h4 class="mb-0 font-weight-medium">$7,805</h4>
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
                        <span>New expense</span>
                        <h4 class="mb-0 font-weight-medium">$3,651</h4>
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
                        <span>Daily Visits</span>
                        <h4 class="mb-0 font-weight-medium">5,805</h4>
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
                        <span>Bounce rate</span>
                        <h4 class="mb-0 font-weight-medium">$13,651</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <a class="card" href="javascript:void(0)">
            <div class="body text-center">
                <img class="img-thumbnail rounded-circle" src="../assets/images/sm/avatar1.jpg" alt="">
                <h6 class="mt-3">Michelle Green</h6>
                <div class="text-center text-muted">Intranet Developer</div>
            </div>
            <div class="card-footer text-center">
                <div class="row clearfix">
                    <div class="col-6">
                        <i class="fa fa-tag font-22"></i>
                        <div><span class="text-muted">9 Badges</span></div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-dollar font-22"></i>
                        <div><span class="text-muted">$ 3.100</span></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6">
        <a class="card" href="javascript:void(0)">
            <div class="body text-center">
                <img class="img-thumbnail rounded-circle" src="../assets/images/sm/avatar2.jpg" alt="">
                <h6 class="mt-3">Louis Henry</h6>
                <div class="text-center text-muted">Angular Developer</div>
            </div>
            <div class="card-footer text-center">
                <div class="row clearfix">
                    <div class="col-6">
                        <i class="fa fa-envelope font-22"></i>
                        <div><span class="text-muted">9 Emails</span></div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-bug font-22"></i>
                        <div><span class="text-muted">10 Bug</span></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6">
        <a class="card" href="javascript:void(0)">
            <div class="body text-center">
                <img class="img-thumbnail rounded-circle" src="../assets/images/sm/avatar3.jpg" alt="">
                <h6 class="mt-3">Nathan Hunter</h6>
                <div class="text-center text-muted">Projects Manager</div>
            </div>
            <div class="card-footer text-center">
                <div class="row clearfix">
                    <div class="col-6">
                        <i class="fa fa-briefcase font-22"></i>
                        <div><span class="text-muted">9 Project</span></div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-dollar font-22"></i>
                        <div><span class="text-muted">$ 3,100</span></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6">
        <a class="card" href="javascript:void(0)">
            <div class="body text-center">
                <img class="img-thumbnail rounded-circle" src="../assets/images/sm/avatar4.jpg" alt="">
                <h6 class="mt-3">David Green</h6>
                <div class="text-center text-muted">Intranet Developer</div>
            </div>
            <div class="card-footer text-center">
                <div class="row clearfix">
                    <div class="col-6">
                        <i class="fa fa-camera font-22"></i>
                        <div><span class="text-muted">17 Photos</span></div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-trophy font-22"></i>
                        <div><span class="text-muted">7 Awards</span></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="row clearfix">
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
                <div id="chart-area-spline-sracked" style="height: 200px"></div>
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
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Top Products</h2>
            </div>
            <div class="body">
                <div id="stackedbar-chart" class="ct-chart"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-6">
        <div class="card">
            <article class="media body mb-0">
                <div class="mr-3">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                </div>
                <div class="media-body">
                    <div class="content">
                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                    </div>
                    <nav class="d-flex text-muted">
                        <a href="javascript:void(0);" class="icon mr-3"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:void(0);" class="icon mr-3"><i class="fa fa-twitter"></i> 24</a>
                        <a href="javascript:void(0);" class="icon mr-3"><i class="fa fa-heart"></i> 43</a>
                        <a href="javascript:void(0);" class="text-muted ml-auto">5 notes</a>
                    </nav>
                </div>
            </article>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <article class="media body mb-0">
                <div class="mr-3">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                </div>
                <div class="media-body">
                    <div class="content">
                    <p class="h5">John Smith <small>@johnsmith</small> <small class="float-right text-muted">31 minutes ago</small></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.</p>
                    </div>
                    <nav class="d-flex text-muted">
                        <a href="javascript:void(0);" class="icon mr-3"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:void(0);" class="icon mr-3"><i class="fa fa-twitter"></i> 24</a>
                        <a href="javascript:void(0);" class="icon mr-3"><i class="fa fa-heart"></i> 43</a>
                        <a href="javascript:void(0);" class="text-muted ml-auto">5 notes</a>
                    </nav>
                </div>
            </article>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="body small_state">
                <div class="details">
                    <span class="mb-0">Population</span>
                    <h5 class="mb-0">614</h5>
                </div>
                <div class="state_chart">
                    <span class="chart_1">5,2,3,6,9,8,4,1,2,8</span>
                </div>
            </div>
        </div>
    </div>                
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="body small_state">
                <div class="details">
                    <span class="mb-0">Page Views</span>
                    <h5 class="mb-0">3,025</h5>
                </div>
                <div class="state_chart">
                    <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="body small_state">
                <div class="details">
                    <span class="mb-0">Growth</span>
                    <h5 class="mb-0">$35M</h5>
                </div>
                <div class="state_chart">
                    <span class="chart_4">4:4, 5:1, 3:5, 8:3, 5:10, 6:10, 8:2, 5:3, 2:3</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card">
            <div class="body small_state">
                <div class="details">
                    <span class="mb-0">Usage</span>
                    <h5 class="mb-0">98%</h5>
                </div>
                <div class="state_chart">
                    <span class="chart_2">9,5,1,3,5,7,8,5,2,4</span>
                </div>
            </div>
        </div>
    </div>                
</div>            
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body w_knob">
                <div class="c_know">
                    <input type="text" class="knob" value="22" data-width="50" data-height="50" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#49c5b6">
                </div>
                <div>
                    <h6>Events</h6>
                    <span>12 of this month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body w_knob">
                <div class="c_know">
                    <input type="text" class="knob" value="78" data-width="50" data-height="50" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#2196f3">
                </div>                            
                <div>
                    <h6>Birthday</h6>
                    <span>4 of this month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body w_knob">
                <div class="c_know">
                    <input type="text" class="knob" value="66" data-width="50" data-height="50" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#f44336">
                </div>                            
                <div>
                    <h6>Conferences</h6>
                    <span>8 of this month</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body w_knob">
                <div class="c_know">
                    <input type="text" class="knob" value="50" data-width="50" data-height="50" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#4caf50">
                </div>
                <div>
                    <h6>Seminars</h6>
                    <span>2 of this month</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Users</h2>
            </div>
            <div class="body">
                <div class="row text-center">
                    <div class="col-6 border-right pb-4 pt-4">
                        <label class="mb-0">New Users</label>
                        <h4 class="font-30 font-weight-bold text-col-blue">2,025</h4>
                    </div>
                    <div class="col-6 pb-4 pt-4">
                        <label class="mb-0">Return Visitors</label>
                        <h4 class="font-30 font-weight-bold text-col-blue">1,254</h4>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="form-group">
                    <label class="d-block">New Users <span class="float-right">77%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Return Visitors <span class="float-right">50%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="d-block">Engagement <span class="float-right">23%</span></label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card user_statistics">
            <div class="header">
                <h2>Earning Report</h2>
            </div>
            <div class="body">                            
                <div id="chart-bar" style="height: 302px"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
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
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="card w_card3">
            <div class="body">
                <div class="text-center"><i class="icon-diamond text-success"></i>
                    <h4 class="m-t-25 mb-0">813 Point</h4>
                    <p>You are doing great job!</p>
                    <a href="javascript:void(0);" class="btn btn-success btn-round">Read now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
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
    <div class="col-lg-3 col-md-6">
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
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body top_counter">
                <div class="icon bg-success text-white"><i class="fa fa-area-chart"></i> </div>
                <div class="content">
                    <span>Growth</span>
                    <h5 class="number mb-0">62%</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body top_counter">
                <div class="icon bg-info text-white"><i class="fa fa-shopping-cart"></i> </div>
                <div class="content">
                    <span>Total Sales</span>
                    <h5 class="number mb-0">$3205</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body top_counter">
                <div class="icon bg-danger text-white"><i class="fa fa-tag"></i> </div>
                <div class="content">
                    <span>Rented</span>
                    <h5 class="number mb-0">3,217</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Summary</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6">
                        <div class="w_summary">
                            <div class="s_chart">
                                <span class="chart">5,2,3,6,9,8,4,1,2,8</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$15K</h2>
                                <span>67% <i class="fa fa-level-up text-success"></i> Total income</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="w_summary">
                            <div class="s_chart">
                                <span class="chart">6,3,2,5,8,9,5,4,2,3</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$1258</h2>
                                <span>15% <i class="fa fa-level-up text-success"></i> Total Expense</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="w_summary">
                            <div class="s_chart">
                                <span class="chart">3,5,1,6,2,4,8,5,3,2</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$2315</h2>
                                <span>23% <i class="fa fa-level-up text-success"></i> Total Growth</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="w_summary">
                            <div class="s_chart">
                                <span class="chart">8,5,2,9,6,3,4,5,6,7</span>
                            </div>
                            <div class="s_detail">
                                <h2 class="font700 mb-0">$1025</h2>
                                <span>52% <i class="fa fa-level-up text-success"></i> Bounce Rate</span>
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-7">
                        <h5 class="mb-0">Server</h5>
                        <small class="info">of 1Tb</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">62%</h2>
                    </div>
                    <div class="col-12">                                    
                        <div class="progress progress-xxs progress-transparent custom-color-blue mb-0 mt-3">
                            <div class="progress-bar" data-transitiongoal="87"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-7">
                        <h5 class="mb-0">Email</h5>
                        <small class="info">of 31</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">62%</h2>
                    </div>
                    <div class="col-12">                                    
                        <div class="progress progress-xxs progress-transparent custom-color-yellow mb-0 mt-3">
                            <div class="progress-bar" data-transitiongoal="54"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>      
    <div class="col-md-4 col-sm-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-7">
                        <h5 class="mb-0">Domians</h5>
                        <small class="info">of 10</small>
                    </div>
                    <div class="col-5 text-right">
                        <h2 class="m-b-0">2</h2>
                    </div>
                    <div class="col-12">                                    
                        <div class="progress progress-xxs progress-transparent custom-color-green mb-0 mt-3">
                            <div class="progress-bar" data-transitiongoal="67"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                
</div>
<div class="row clearfix">
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-blue">+5%</div>
                <h4 class="mb-1">423</h4>
                <div class="text-muted">Paid Traffic</div>
            </div>
            <div class="card-chart-bg">
                <div id="chart-bg-users-1" style="height: 60px"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-red">-3%</div>
                <h4 class="mb-1">423</h4>
                <div class="text-muted">Organic Traffic</div>
            </div>
            <div class="card-chart-bg">
                <div id="chart-bg-users-2" style="height: 60px"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-green">-3%</div>
                <h4 class="mb-1">423</h4>
                <div class="text-muted">Daily Visits</div>
            </div>
            <div class="card-chart-bg">
                <div id="chart-bg-users-3" style="height: 60px"></div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-yellow">9%</div>
                <h4 class="mb-1">423</h4>
                <div class="text-muted">Conversion Rate</div>
            </div>
            <div class="card-chart-bg">
                <div id="chart-bg-users-4" style="height: 60px"></div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="body p-4">
                <div class="row clearfix">
                    <div class="col-auto">
                        <div class="stamp stamp-md bg-warning">
                            <i class="fa fa-database"></i>
                        </div>
                    </div>
                    <div class="col text-right">
                        <div class="small text-muted">Capacity</div>
                        <div class="h4 m-0">105GB</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card ">
            <div class="body p-4">
                <div class="row clearfix">
                    <div class="col-auto">
                        <div class="stamp stamp-md bg-success">
                            <i class="fa fa-institution"></i>
                        </div>
                    </div>
                    <div class="col text-right">
                        <div class="small text-muted">Revenue</div>
                        <div class="h4 m-0">$1,345</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="body p-4">
                <div class="row clearfix">
                    <div class="col-auto">
                        <div class="stamp stamp-md bg-danger">
                            <i class="fa fa-bug"></i>
                        </div>
                    </div>
                    <div class="col text-right">
                        <div class="small text-muted">Bugs</div>
                        <div class="h4 m-0">24</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card ">
            <div class="body p-4">
                <div class="row clearfix">
                    <div class="col-auto">
                        <div class="stamp stamp-md bg-info">
                            <i class="fa fa-twitter"></i>
                        </div>
                    </div>
                    <div class="col text-right">
                        <div class="small text-muted">Followers</div>
                        <div class="h4 m-0">10K</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-green">
            <div class="card-header">Web developer</div>
            <div class="card-body">
                <div class="media mb-0">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar1.jpg" alt="">
                    <div class="media-body">
                        <h5 class="m-0">Deborah Cox</h5>
                        <p class="text-muted mb-0">deborah.cox@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-info">
            <div class="card-header">Web Designer</div>
            <div class="card-body">
                <div class="media mb-0">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar2.jpg" alt="">
                    <div class="media-body">
                        <h5 class="m-0">Deborah Cox</h5>
                        <p class="text-muted mb-0">deborah.cox@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-orange">
            <div class="card-header">Java Expert</div>
            <div class="card-body">
                <div class="media mb-0">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar3.jpg" alt="">
                    <div class="media-body">
                        <h5 class="m-0">Michelle Schultz</h5>
                        <p class="text-muted mb-0">m.schultz@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-white bg-red">
            <div class="card-header">Angular developer</div>
            <div class="card-body">
                <div class="media mb-0">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                    <div class="media-body">
                        <h5 class="m-0">Denise Alvarado</h5>
                        <p class="text-muted mb-0">d.alvarado@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div>Total revenue</div>
                <div class="py-4 m-0 text-center h1 text-success">$9,452</div>
                <div class="d-flex">
                    <small class="text-muted">Income</small>
                    <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4%</div>
                </div>
            </div>
        </div>
    </div>                
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div>Income status</div>
                <div class="py-4 m-0 text-center h1 text-info">$2,258</div>
                <div class="d-flex">
                    <small class="text-muted">New income</small>
                    <div class="ml-auto">0%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div>Customer status</div>
                <div class="py-4 m-0 text-center h1 text-warning">232</div>
                <div class="d-flex">
                    <small class="text-muted">New users</small>
                    <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>3%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body">
                <div>Order status</div>
                <div class="py-4 m-0 text-center h1 text-danger">428</div>
                <div class="d-flex">
                    <small class="text-muted">New order</small>
                    <div class="ml-auto"><i class="fa fa-caret-down text-danger"></i>10%</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-warning"><i class="wi wi-day-cloudy"></i></div>
                <h3 class="mb-1">18°C</h3>
                <div>New York, USA</div>
            </div>
        </div>                    
        <div class="card">
            <div class="body">
                <div class="media">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar7.jpg" alt="">
                    <div class="media-body">
                        <h5 class="m-0">Betty Torres</h5>
                        <p class="text-muted mb-0">Mobile Designer</p>
                    </div>
                </div>
                <table class="table card-table mb-0">
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">Apple</td>
                            <td class="text-right">984.52 <span class="text-success">(0.25%) <i class="fa fa-caret-up"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Google</td>
                            <td class="text-right">956.3 <span class="text-danger">(-0.15%) <i class="fa fa-caret-down"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">DMKT</td>
                            <td class="text-right">89.74 <span class="text-success">(0.85%) <i class="fa fa-caret-up"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">TCS</td>
                            <td class="text-right">48.75 <span class="text-danger">(-0.63%) <i class="fa fa-caret-down"></i></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div id="slider4" class="carousel slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="card-img-top" src="../assets/images/image-gallery/10.jpg" alt="Card image cap">
                    </div>
                    <div class="carousel-item">
                        <img class="card-img-top" src="../assets/images/image-gallery/11.jpg" alt="Card image cap">
                    </div>
                    <div class="carousel-item">
                        <img class="card-img-top" src="../assets/images/image-gallery/12.jpg" alt="Card image cap">
                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row clearfix">
                    <div class="col-6">
                        <i class="fa fa-camera font-22"></i>
                        <div><span class="text-muted">3 Photos</span></div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-eye font-22"></i>
                        <div><span class="text-muted">1k Views</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>December 2018</h2>
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
                <table class="table table-calendar mb-3">
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
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <img class="card-img-top" src="../assets/images/image-gallery/1.jpg" alt="Card image cap">
            <div class="body">
                <h4 class="card-title">Card title</h4>
                <div class="card-subtitle">Lorem ipsum dolor sit amet.</div>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="javascript:void(0)" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card bg-success">
            <div class="body text-white">
                <div class="card-value float-right">58%</div>
                <h3 class="mb-1">6251</h3>
                <div>New Orders</div>
            </div>
        </div>
        <form class="card" action="" method="post">
            <div class="header">
                <h2>Login to your account</h2>
            </div>
            <div class="body">
                <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control round" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="form-label displayblock">Password<a href="javascript:void(0);" class="float-right small">I forgot password</a></label>
                    <input type="password" class="form-control round" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="fancy-checkbox">
                        <label><input type="checkbox"><span>Remember me</span></label>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </div>
            </div>
        </form>
        <div class="card border-danger">
            <div class="body text-danger">
                <h4 class="card-title">Danger card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="body">
                <div class="media mb-0">
                    <img class="rounded mr-3" src="../assets/images/xs/avatar4.jpg" alt="">
                    <div class="media-body">
                        <h5 class="m-0">Deborah Cox</h5>
                        <p class="text-muted mb-0">Webdeveloper</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Server params</h2>
            </div>
            <div class="body">
                <div class="card-text">
                    <div class="mt-0">
                        <small class="float-right text-muted">10/200 GB</small>
                        <span>Memory</span>
                        <div class="progress progress-xxs">
                            <div style="width: 60%;" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <small class="float-right text-muted">20 GB</small>
                        <span>Bandwidth</span>
                        <div class="progress progress-xxs">
                            <div style="width: 50%;" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <small class="float-right text-muted">73%</small>
                        <span>Activity</span>
                        <div class="progress progress-xxs">
                            <div style="width: 40%;" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <small class="float-right text-muted">400 GB</small>
                        <span>FTP</span>
                        <div class="progress progress-xxs">
                            <div style="width: 80%;" class="progress-bar bg-danger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="header">
                <h2>Portfolio</h2>
            </div>
            <div class="body">
                <table class="table card-table mb-0">
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">Apple</td>
                            <td class="text-right">984.52 <span class="text-success">(0.25%) <i class="fa fa-caret-up"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">Google</td>
                            <td class="text-right">956.3 <span class="text-danger">(-0.15%) <i class="fa fa-caret-down"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">DMKT</td>
                            <td class="text-right">89.74 <span class="text-success">(0.85%) <i class="fa fa-caret-up"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">TMLS</td>
                            <td class="text-right">210.04 <span class="text-success">(0.65%) <i class="fa fa-caret-up"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">YOUS</td>
                            <td class="text-right">218.47 <span class="text-danger">(-0.42%) <i class="fa fa-caret-down"></i></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold">TCS</td>
                            <td class="text-right">48.75 <span class="text-danger">(-0.63%) <i class="fa fa-caret-down"></i></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-warning">27%</div>
                <h3 class="mb-1">2,510</h3>
                <div>Total Leads</div>
                <div class="mt-4">
                    <div class="progress progress-xxs">
                        <div class="progress-bar bg-warning" style="width: 27%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">
                <div class="card-value float-right text-danger">0%</div>
                <h3 class="mb-1">$5,853</h3>
                <div>Total Payment</div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/chartist.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/widgets.js') }}"></script>
@stop