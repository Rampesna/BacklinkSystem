@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    <form enctype="multipart/form-data" class="row clearfix" method="post" action="{{route('add-link-control')}}">
        {{csrf_field()}}
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                <div class="body">

                    <div class="form-group">
                        <label>Sisteme Eklenecek Linkler <i class="small" style="color: #5CB65F"> (Her Satırda Bir Site
                                Olacak Şekilde Ekleyin)</i></label>
                        <textarea maxlength="160" name="sites" class="form-control" rows="5" cols="30" required></textarea>
                    </div>

                    <input type="submit" value="Kontrol Et" class="btn btn-block btn-outline-success">
                </div>
            </div>
        </div>

    </form>

    @if(isset($returnArray))
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
                                <th>Ülke</th>
                                <th>Ülke Alexa</th>
                                <th>Linking In</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($returnArray as $site)
                                <tr>
                                    <td>{{$site["site"]}}</td>
                                    <td>{{$site["global_alexa"]}}</td>
                                    <td>{{$site["country"]}}</td>
                                    <td>{{$site["country_alexa"]}}</td>
                                    <td>{{$site["linking_count"]}}</td>
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
