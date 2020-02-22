@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif

    <form class="row clearfix" method="post" action="{{route('update-landing-settings')}}">
        {{csrf_field()}}
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                <div class="body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>Site Başlığı <small><i>( Title )</i></small></label>
                                <input value="{{$landingSettings->title}}" type="text" maxlength="160" name="title" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>Site Anahtar Kelimeleri <small><i>( Keywords )</i></small></label>
                            <div style="color: white" class="input-group demo-tagsinput-area">
                                <input value="{{$landingSettings->keywords}}" required name="keywords" type="text" class="form-control" data-role="tagsinput" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label>Site Açıklaması <small><i>( Description )</i></small></label>
                            <textarea required name="description" rows="10" class="form-control" placeholder="Site Açıklaması ( Description )...">{!! $landingSettings->description !!}</textarea>
                        </div>
                    </div>
                    <hr>
                    <input type="submit" value="Güncelle" class="btn btn-block btn-outline-success">
                </div>
            </div>
        </div>

    </form>

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@stop
