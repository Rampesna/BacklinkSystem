@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    <form enctype="multipart/form-data" class="row clearfix" method="post" action="{{route('add-link-control')}}">
        {{csrf_field()}}
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                <div class="body">

                    <div class="form-group">
                        <label>Sisteme Eklenecek Link</label>
                        <input type="text" maxlength="160" name="new_link" class="form-control" required>
                    </div>

                    <input type="submit" value="Kontrol Et" class="btn btn-block btn-outline-success">
                </div>
            </div>
        </div>

    </form>

    @if(isset($returnArray))
        <form action="{{route('add-link-post')}}" method="post" class="row clearfix">
            {{csrf_field()}}
            <input name="site_url" type="hidden" value="{{$returnArray["site"]}}">
            <input name="global_alexa" type="hidden" value="{{$returnArray["global_alexa"]}}">
            <input name="country" type="hidden" value="{{$returnArray["country"]}}">
            <input name="country_alexa" type="hidden" value="{{$returnArray["country_alexa"]}}">
            <input name="linking_count" type="hidden" value="{{$returnArray["linking_count"]}}">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Sitenin İncelemesi</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-custom spacing5">
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Global Alexa</th>
                                <th>Ülke</th>
                                <th>Ülke Alexa</th>
                                <th>Linking In</th>
                                <th>DA Değeri</th>
                                <th>PA Değeri</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>{{$returnArray["site"]}}</td>
                                <td>{{$returnArray["global_alexa"]}}</td>
                                <td>{{$returnArray["country"]}}</td>
                                <td>{{$returnArray["country_alexa"]}}</td>
                                <td>{{$returnArray["linking_count"]}}</td>
                                <td>
                                    <input name="" type="text" class="form-control">
                                </td>
                                <td>
                                    <input name="" type="text" class="form-control">
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
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
