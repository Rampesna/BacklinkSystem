@extends('Layouts.authentication')
@section('title', 'Kayıt Olun')


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
                <a class="navbar-brand" href="javascript:void(0);"><img src="../assets/images/icon.svg" width="30" height="30" class="d-inline-block align-top mr-2" alt="">backlinksatisi.com</a>
            </div>
            @if(isset($errorMessage))
                <small style="color: red">{{$errorMessage}}</small>
            @endif
            <div class="card">
                <div class="body">
                    <p class="lead">Hesap Oluşturun</p>
                    <form method="post" action="{{route('register-post')}}" class="form-auth-small m-t-20">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input name="name_surname" required type="text" class="form-control round" placeholder="Adınız Soyadınız">
                        </div>
                        <div class="form-group">
                            <input type="text" name="username" required class="form-control round" placeholder="Kullanıcı Adınız">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required class="form-control round" placeholder="E-posta Adresiniz">
                        </div>
                        <div class="form-group">
                            <input type="tel" minlength="10" maxlength="10" name="phone" required class="form-control round" placeholder="Telefon Numaranız">
                            <small class="font-10"><i>* Başında 0 Olmadan 10 Haneli Olarak Giriniz</i></small>
                        </div>
                        <div class="form-group">
                            <input maxlength="16" name="password" required type="password" minlength="8" class="form-control round" placeholder="Şifreniz">
                        </div>
                        <button type="submit" class="btn btn-primary btn-round btn-block">Kaydol</button>
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
