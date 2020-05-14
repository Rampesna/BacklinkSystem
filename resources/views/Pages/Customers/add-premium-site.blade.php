@extends('Layouts.master')
@section('site_title', 'Backlink Satış')


@section('content')

    @if(isset($errorMessage))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> {{$errorMessage}}
        </div>
    @endif

    @if(isset($controlledSites))
        <form class="row clearfix" method="post" action="{{route('add-premium-site-post')}}">
            {{csrf_field()}}
            <div class="container-fluid">
                <button id="setPremium" type="submit" class="btn btn-block btn-outline-success">Premium Site Olarak Ayarla</button>
                <hr>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Premium Olarak Ayarlamak İstediğiniz Siteyi Seçin</label>
                                    <select required name="premium_site_id" class="form-control">
                                        @foreach($controlledSites as $site)
                                            <option value="{{$site['site_id']}}">{{$site['site_url']}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            @if($myPremiumPackage->is_enemy_analysis)
                                <div class="col-12">
                                    <label>Rakip Analizi İçin Rakibinizi Sitesini Giriniz</label>
                                    <input required type="text" name="enemy_url" class="form-control">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="col-12">
                                <label>Analiz İçin İstediğiniz Anahtar Kelimeyi Giriniz</label>
                                <input required type="text" name="keyword" class="form-control">
                            </div>
                        </div>
                        @for($count = 2 ; $count <= 5 ; $count++)
                            @if($myPremiumPackage->allowed_keyword_count > $count - 1)
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Analiz İçin İstediğiniz {{$count}}. Anahtar Kelimeyi Giriniz</label>
                                        <input required type="text" name="keyword_{{$count}}" class="form-control">
                                    </div>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div>
            </div>
        </form>
    @endif

@stop

@section('custom-header')
    <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-datatable/buttons/buttons.print.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>


    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script>
        $("#setPremium").on("click", function() {
            $(this).prop("readonly", true);
            $(this).html("<i class=\"fa fa-spinner fa-spin\"></i> <span>Ayarlanıyor...</span>");
        });
    </script>


@stop
