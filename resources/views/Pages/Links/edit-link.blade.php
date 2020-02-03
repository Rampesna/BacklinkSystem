@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif

    <form action="{{route('update-link')}}" method="post" class="row clearfix">
        {{csrf_field()}}
        <input name="id" type="hidden" value="{{$link->id}}">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Siteyi Düzenle</h2>
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
                            <th>Fiyatı</th>
                            <th>Satılacak Link Sayısı</th>
                            <th>Link Türü</th>
                            <th>Adult</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>{{$link->url}}</td>
                            <td>{{$link->alexa_global}}</td>
                            <td>{{$link->country}}</td>
                            <td>{{$link->alexa_country}}</td>
                            <td>{{$link->sites_linking_in}}</td>
                            <td>
                                <input value="{{$link->da_value}}" name="da_value" type="text" class="form-control">
                            </td>
                            <td>
                                <input value="{{$link->pa_value}}" name="pa_value" type="text" class="form-control">
                            </td>
                            <td>
                                <input value="{{$link->price}}" name="price" type="text" class="form-control">
                            </td>
                            <td>
                                <input value="{{$link->remained}}" name="sale_limit" type="text" class="form-control">
                            </td>
                            <td>
                                <select name="type" class="custom-select">
                                    <option value="backlink" @if($link->type == "backlink") selected @endif>Backlink</option>
                                    <option value="hacklink" @if($link->type == "hacklink") selected @endif>Hacklink</option>
                                </select>
                            </td>
                            <td>
                                <div class="float-right">
                                    <label class="switch">
                                        <input name="is_adult" type="checkbox" @if($link->is_adult == 1) checked @endif>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <input type="submit" value="Güncelle" class="btn btn-success btn-block">

            </div>
        </div>
    </form>

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
@stop
