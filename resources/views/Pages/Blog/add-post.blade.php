@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif

    <form enctype="multipart/form-data" class="row clearfix" method="post" action="{{route('add-post')}}">
        {{csrf_field()}}
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card">

                <div class="body">

                    <label for="basic-url">Başlık</label>
                    <div class="input-group mb-3">
                        <input required name="news_title" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <label for="basic-url">İçerik</label>
                    <textarea required name="news_content" class="summernote"></textarea>

                    <br>

                    <div class="form-group">
                        <label>SEO Açıklama <i class="small"> (Max 160)</i></label>
                        <textarea maxlength="160" name="news_description" class="form-control" rows="5" cols="30" required>@if(isset($oldValues)) {{$oldValues["news_description"]}} @endif</textarea>
                    </div>
                    <div class="form-group">
                        <label>Anahtar Kelimeler <i class="small">(Keywords)</i></label>
                        <div class="input-group demo-tagsinput-area">
                            <input required name="news_keywords" type="text" class="form-control" data-role="tagsinput" value="@if(isset($oldValues)) {{$oldValues["news_keywords"]}} @else backlinksatisi @endif">
                        </div>
                        <i class="small">Her Kelimeden Sonra 'Enter' Tuşuna Basınız!</i>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="form-group">
                <button class="btn btn-block btn-success" type="submit">Yayınla</button>
            </div>

            <div class="card">
                <div class="body">
                    <label for="basic-url">Haber Görseli</label>
                    <input name="news_image" required type="file" class="dropify">
                </div>
            </div>

            <div class="card">
                <div class="body">
                    <label>Kategoriler</label>
                    <div class="multiselect_div">
                        <select required id="multiselect2" name="news_categories[]" class="multiselect multiselect-custom" multiple="multiple">
                            @foreach($categories as $category)
                                <option @if($category->id == 1) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                </div>
            </div>
        </div>

    </form>

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/dropify/css/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/multi-select/css/multi-select.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/multi-select/css/multi-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/nouislider/nouislider.min.css') }}">

    <style>
        .demo-card label{ display: block; position: relative;}
        .demo-card .col-lg-4{ margin-bottom: 30px;}
    </style>
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script src="{{ asset('assets/vendor/summernote/dist/summernote.js') }}"></script>
    <script src="{{ asset('assets/vendor/dropify/js/dropify.js') }}"></script>
    <script src="{{ asset('assets/js/pages/forms/dropify.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script><!-- Multi Select Plugin Js -->
    <script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>

    <script src="{{ asset('assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script><!-- Bootstrap Colorpicker Js -->
    <script src="{{ asset('assets/vendor/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script><!-- Input Mask Plugin Js -->
    <script src="{{ asset('assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/multi-select/js/jquery.multi-select.js') }}"></script><!-- Multi Select Plugin Js -->
    <script src="{{ asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script><!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{ asset('assets/vendor/nouislider/nouislider.js') }}"></script><!-- noUISlider Plugin Js -->

    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>
@stop

