@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')



    @if(isset($allLinks))
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Sitelerin İncelemeleri</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom spacing5">
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Global Alexa</th>
                                <th>Ülke Alexa</th>
                                <th>Index Sayısı</th>
                                <th>Linking In</th>
                                <th>DA</th>
                                <th>PA</th>
                                <th>Tür</th>
                                <th>Adult</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($allLinks as $link)
                                <tr>
                                    <td>{{$link->url}}</td>
                                    <td>{{$link->alexa_global}}</td>
                                    <td>{{$link->alexa_country}}</td>
                                    <td>{{$link->google_index_count}}</td>
                                    <td>{{$link->sites_linking_in}}</td>
                                    <td>{{$link->da_value}}</td>
                                    <td>{{$link->pa_value}}</td>
                                    <td>{{strtoupper($link->type)}}</td>
                                    <td>
                                        @if($link->is_adult == 0)
                                            <i style="color: #00aa00" class="fa fa-check"></i>
                                        @else
                                            <i style="color: #8f1f00" class="fa fa-close"></i>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endif

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@stop
