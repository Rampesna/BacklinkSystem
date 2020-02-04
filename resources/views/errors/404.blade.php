@extends('Layouts.authentication')
@section('site_title', 'Backlink Satış')


@section('content')
    <div class="pattern">
        <span class="red"></span>
        <span class="indigo"></span>
        <span class="blue"></span>
        <span class="green"></span>
        <span class="orange"></span>
    </div>
    <div class="auth-main particles_js">
        <div class="auth_div vivify popIn">
            <div class="auth_brand">
                <a class="navbar-brand" href="javascript:void(0);"><img src="../assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">Oculux</a>
            </div>
            <div class="card page-400">
                <div class="body">
                    <p class="lead mb-3"><span class="number left">404 </span></p>
                    <p>Aradığınız Sayfa Bulunamadı.</p>
                    <div class="margin-top-30">
                        <a href="{{route('index')}}" class="btn btn-round btn-primary btn-block"><i class="fa fa-home"></i> <span>Anasayfa</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
    <!-- END WRAPPER -->
@stop

@section('custom-header')

@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>

@stop
