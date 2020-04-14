@extends('Layouts.master')
@section('site_title', 'Backlink Satış')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))
@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif

    @if(isset($category))
        <form class="row clearfix" method="post" action="{{route('update-category')}}">
            {{csrf_field()}}
            <input type="hidden" name="category_id" value="{{$category->id}}">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <label for="basic-url">Kategori Adı</label>
                        <div class="input-group mb-3">
                            <input value="{{$category->name}}" required name="category_name" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <input type="submit" value="Güncelle" class="btn btn-block btn-success">
            </div>
        </form>
    @else
        <form class="row clearfix" method="post" action="{{route('add-category')}}">
            {{csrf_field()}}
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                        <label for="basic-url">Yeni Kategori Adı</label>
                        <div class="input-group mb-3">
                            <input required name="category_name" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                </div>
                <input type="submit" value="Ekle" class="btn btn-block btn-success">
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

