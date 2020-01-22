@extends('Layouts.authentication')
@section('title', 'Giriş Yap')


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
                <a class="navbar-brand" href="javascript:void(0);"><img src="{{asset('assets/images/icon.svg')}}" width="30" height="30" class="d-inline-block align-top mr-2" alt="">ÇınarWbh Yazılım</a>
            </div>
            <div class="card">
                <div class="body">
                    <p class="lead">Giriş Yapın</p>
                    <form action="{{route('index')}}" class="form-auth-small m-t-20">
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">E-posta veya Kullanıcı Adı</label>
                            <input name="identity" required type="text" class="form-control round" id="signin-email" placeholder="E-posta veya Kullanıcı Adınızı Girin">
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Şifre</label>
                            <input name="password" required type="password" class="form-control round" id="signin-password" placeholder="Şifrenizi Girin">
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <span></span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-round btn-block">Giriş Yap</button>
                        <div class="bottom">
                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{route('index')}}">Şifrenizi mi Unuttunuz?</a></span>
                            <span>Üye Değil Misiniz? <a href="page-register.html">Hemen Kayıt Ol</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </div>
@stop

@section('page-styles')

@stop

@section('page-script')

@stop
