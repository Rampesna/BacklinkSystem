@extends('layout.master')
@section('parentPageTitle', 'Components')
@section('title', 'Progress Bars')


@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 87%;">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 46%">
                        <span class="sr-only">60% Complete (warning)</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (success)</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                        <span class="sr-only">60% Complete (danger)</span>
                    </div>
                </div>
                <hr>
                <h6>Sizes</h6>
                <div class="progress progress-xs">
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 89%;">
                        <span class="sr-only">60% Complete</span>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                        <span class="sr-only">60% Complete (warning)</span>
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 78%">
                        <span class="sr-only">60% Complete (success)</span>
                    </div>
                </div>
                <div class="progress progress-lg">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                        <span class="sr-only">60% Complete (danger)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Progress Bars <small>Progress Bars based on Bootstrap-Progressbar plugin</small></h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <h6>Vertical Progress Bars</h6>
                        <div style="height: 400px;">
                            <div class="progress progress-striped vertical wide">
                                <div class="progress-bar progress-bar-info" data-transitiongoal="57"></div>
                            </div>
                            <div class="progress progress-striped vertical bottom wide">
                                <div class="progress-bar progress-bar-success" data-transitiongoal="27"></div>
                            </div>
                            <div class="progress progress-striped vertical bottom wide">
                                <div class="progress-bar progress-bar-warning" data-transitiongoal="61"></div>
                            </div>
                            <div class="progress progress-striped vertical bottom wide">
                                <div class="progress-bar progress-bar-danger" data-transitiongoal="93"></div>
                            </div>
                            <div class="progress vertical bottom">
                                <div class="progress-bar" data-transitiongoal="82"></div>
                            </div>
                            <div class="progress vertical">
                                <div class="progress-bar" data-transitiongoal="26"></div>
                            </div>                                        
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <h6>Percentage Format</h6>
                        <div id="progress-format1" class="progress">
                            <div class="progress-bar" data-transitiongoal="27"></div>
                        </div>
                        <h6>Number Format</h6>
                        <div id="progress-format2" class="progress">
                            <div class="progress-bar" data-transitiongoal="41"></div>
                        </div>
                        <h6>Custom Format</h6>
                        <div id="progress-custom-format" class="progress">
                            <div class="progress-bar" data-transitiongoal="77"></div>
                        </div>
                        <hr>
                        <h6>Other Styles</h6>
                        <div id="progress-striped" class="progress progress-striped">
                            <div class="progress-bar progress-bar-warning" data-transitiongoal="43"></div>
                        </div>
                        <div id="progress-striped-active" class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" data-transitiongoal="67"></div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                        <hr>
                        <h6>Stacked Progress Bar</h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" style="width: 45%">
                                <span class="sr-only">45% Complete (success)</span>
                            </div>
                            <div class="progress-bar progress-bar-warning" style="width: 20%">
                                <span class="sr-only">20% Complete (warning)</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" style="width: 10%">
                                <span class="sr-only">10% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                       
        </div>
    </div>                
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script>
    $(function() {
        $('#progress-format1 .progress-bar').progressbar({
            display_text: 'fill'
        });

        $('#progress-format2 .progress-bar').progressbar({
            display_text: 'fill',
            use_percentage: false
        });

        $('#progress-custom-format .progress-bar').progressbar({
            display_text: 'fill',
            use_percentage: false,
            amount_format: function(p, t) {
                return p + ' of ' + t;
            }
        });

        $('#progress-striped .progress-bar, #progress-striped-active .progress-bar, #progress-stacked .progress-bar').progressbar({
            display_text: 'fill'
        });

        $('.progress.vertical .progress-bar').progressbar();
        $('.progress.vertical.wide .progress-bar').progressbar({
            display_text: 'fill'
        });
    });
</script>
@stop