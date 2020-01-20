@extends('layout.authentication')
@section('title', 'Coming Soon')


@section('content')
<div class="coming-soon particles_js">
    <div class="auth_div vivify fadeInTop">
        <div class="card">            
            <div class="body">
                <div class="m-0auto text-center">
                    <p class="lead">Our website is under construction</p>
                    <div class="wsize2 row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <span class="s1-txt1">Days</span>
                            <div class="how-countdown">
                                <span class="l1-txt1 p-b-9 days">35</span>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <span class="s1-txt1">Hours</span>
                            <div class="how-countdown">
                                <span class="l1-txt1 p-b-9 hours">17</span>                                
                            </div>                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <span class="s1-txt1">Minutes</span>
                            <div class="how-countdown">
                                <span class="l1-txt1 p-b-9 minutes">50</span>                                
                            </div>                            
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <span class="s1-txt1">Seconds</span>
                            <div class="how-countdown">
                                <span class="l1-txt1 p-b-9 seconds">39</span>                                
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <form id="email" class="mb-2 mt-2 col-12">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Your Email">
                                <div class="input-group-append">
                                    <a href="javascript:void(0);" class="search_toggle btn btn-success">Get Notified</a>
                                </div>
                            </div>
                            <span class="s1-txt4 pt-4">I promise to <span class="bor2">never</span> spam</span>
                        </form>                        
                    </div>
                </div>                
                <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div>
            </div>            
        </div>
    </div>
    <div id="particles-js"></div>
</div>
@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/vendor/countdowntime/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/countdowntime/moment-timezone.min.js') }}"></script>
<script src="{{ asset('assets/vendor/countdowntime/moment-timezone-with-data.min.js') }}"></script>
<script src="{{ asset('assets/vendor/countdowntime/countdowntime.js') }}"></script>

<script>
    $('.wsize2').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: 0,
        endtimeMonth: 0,
        endtimeDate: 113,
        endtimeHours: 13,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: "" ,
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>
@stop