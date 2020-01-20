@extends('layout.authentication')
@section('title', 'Forgot Password')


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
        <div class="card forgot-pass">
            <div class="body">
                <p class="lead mb-3"><strong>Oops</strong>,<br> forgot something?</p>
                <p>Type email to recover password.</p>
                <form class="form-auth-small">
                    <div class="form-group">                                    
                        <input type="password" class="form-control round" id="signup-password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-round btn-primary btn-lg btn-block">RESET PASSWORD</button>
                    <div class="bottom">
                        <span class="helper-text">Know your password? <a href="{{route('authentication.login')}}">Login</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->
@stop

@section('page-styles')

@stop

@section('page-script')
@stop