@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif


    <form class="row clearfix" method="post" action="{{route('buy-introduction-site-post')}}">
        {{csrf_field()}}
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">

                <div class="body">

                    <input type="hidden" name="introduction_site_id" value="{{$site->id}}">

                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <label>Tanıtım Alınan Site</label>
                                <input disabled value="{{$site->url}}" type="text" class="form-control bg-dark" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label>Eklenme Şekli</label>
                                <select class="custom-select" name="add_type">
                                    <option value="1">Tüm Yazıyı Değiştir</option>
                                    <option value="0">Gizli Olarak İçine Ekle</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Tanıtım Yazınızı Girin</label>
                                <textarea required name="introduction_text" class="summernote"></textarea>
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="Satın Al" class="btn btn-block btn-outline-success">
                </div>
            </div>
        </div>

    </form>

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>

    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

@stop
