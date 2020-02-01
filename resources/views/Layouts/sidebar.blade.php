<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{route('index')}}"><img src="{{asset('assets/images/icon.svg')}}" alt="Oculux Logo" class="img-fluid logo"><span>BacklinkSatisi</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{asset('assets/images/user.png')}}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Heşgeldiniz,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>
                        @if(\Illuminate\Support\Facades\Auth::check())
                            {{\Illuminate\Support\Facades\Auth::user()->name_surname}}
                        @else
                            {{redirect()->route('login')}}
                        @endif
                    </strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="{{route('index')}}"><i class="icon-user"></i>Profil</a></li>
                    <li><a href="{{route('index')}}"><i class="icon-envelope-open"></i>Mesajlar</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Hesap</a></li>
{{--                    <li class="divider"></li>--}}
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-power"></i>Çıkış Yap</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Sistem</li>
                <li class="{{ Request::segment(1) === 'system' ? 'active open' : null }}">
                    <a href="#accounts" class="has-arrow"><i class="fa fa-user"></i><span>Hesaplar</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'all-accounts' ? 'active' : null }}"><a href="{{route('all-accounts')}}">Tüm Müşteriler</a></li>
                        <li class="{{ Request::segment(2) === 'all-sales' ? 'active' : null }}"><a href="{{route('index')}}">Satışlar</a></li>
                        <li class="{{ Request::segment(2) === 'finance-monitoring' ? 'active' : null }}"><a href="{{route('index')}}">Gelir Analizi</a></li>
                    </ul>
                </li>
                <li class="{{ Request::segment(1) === 'links' ? 'active open' : null }}">
                    <a href="#links" class="has-arrow"><i class="fa fa-link"></i><span>Link Sistemi</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'add-new-link' ? 'active' : null }}"><a href="{{route('index')}}">Yeni Site Ekle</a></li>
                        <li class="{{ Request::segment(2) === 'all-links' ? 'active' : null }}"><a href="{{route('all-links')}}">Tüm Linkler</a></li>
                        <li class="{{ Request::segment(2) === 'passive-links' ? 'active' : null }}"><a href="{{route('index')}}">Pasif Linkler</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
