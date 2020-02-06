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
        @if(\Illuminate\Support\Facades\Auth::check())
            @php($user = \Illuminate\Support\Facades\Auth::user())
            @if($user->is_admin == 1)
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="header">Sistem</li>
                        <li class="{{ Request::segment(1) === 'account' ? 'active open' : null }}">
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
                                <li class="{{ Request::segment(2) === 'add-link' ? 'active' : null }}"><a href="{{route('add-link')}}">Yeni Link Ekle</a></li>
                                <li class="{{ Request::segment(2) === 'all-links' ? 'active' : null }}"><a href="{{route('all-links')}}">Tüm Linkler</a></li>
                                <li class="{{ Request::segment(2) === 'passive-links' ? 'active' : null }}"><a href="{{route('index')}}">Pasif Linkler</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            @else
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="header">Sistem</li>
                        <li class="{{ Request::segment(1) === 'my-account' ? 'active open' : null }}">
                            <a href="#accounts" class="has-arrow"><i class="fa fa-user"></i><span>Hesabım</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'my-account' ? 'active' : null }}"><a href="{{route('my-account')}}">Hesap Bilgilerim</a></li>
                                <li class="{{ Request::segment(2) === 'my-sites' ? 'active' : null }}"><a href="{{route('my-sites')}}">Sitelerim</a></li>
                                <li class="{{ Request::segment(2) === 'my-links' ? 'active' : null }}"><a href="{{route('my-links')}}">Satın Aldığım Linkler</a></li>
                                <li class="{{ Request::segment(2) === 'buy-credit' ? 'active' : null }}"><a href="{{route('buy-credit')}}">Kredi Yükle</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'customer' ? 'active open' : null }}">
                            <a href="#links" class="has-arrow"><i class="fa fa-link"></i><span>Link Sistemi</span></a>
                            <ul>
                                <li class="{{ Request::segment(2) === 'all-links' ? 'active' : null }}"><a href="{{route('customer-all-links')}}">Linkler</a></li>
                                <li class="{{ Request::segment(2) === 'report-error' ? 'active' : null }}"><a href="{{route('index')}}">Hata Bildir</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            @endif
        @endif

    </div>
</div>
