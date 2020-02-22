<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{route('index')}}"><img src="{{asset('assets/images/icon.svg')}}" alt="Oculux Logo" class="img-fluid logo"><span>backlinksatisi.com</span></a>
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
                            {{\Illuminate\Support\Facades\Auth::user()->name_surname}}<br><small>{{"@".\Illuminate\Support\Facades\Auth::user()->username}}</small>
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
            @if($user->username == "demo")
                <nav id="left-sidebar-nav" class="sidebar-nav">

                </nav>
            @else
                @if($user->is_admin == 1)
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">
                            <li class="header">Sistem</li>
                            <li class="{{ Request::segment(1) === 'account' ? 'active open' : null }}">
                                <a href="#account" class="has-arrow"><i class="fa fa-user"></i><span>Hesaplar</span></a>
                                <ul>
                                    <li class="{{ Request::segment(2) === 'all-accounts' ? 'active' : null }}"><a href="{{route('all-accounts')}}">Tüm Müşteriler</a></li>
                                    <li class="{{ Request::segment(2) === 'sold-credits' ? 'active' : null }}"><a href="{{route('sold-credits')}}">Satılan Krediler</a></li>
                                    <li class="{{ Request::segment(2) === 'declined-credits' ? 'active' : null }}"><a href="{{route('declined-credits')}}">Reddedilen Krediler</a></li>
                                    <li class="{{ Request::segment(2) === 'credit-appeals' ? 'active' : null }}"><a href="{{route('credit-appeals')}}">Kredi Başvuruları</a></li>
                                    <li class="{{ Request::segment(2) === 'finance-monitoring' ? 'active' : null }}"><a href="{{route('index')}}">Gelir Analizi</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === 'links' ? 'active open' : null }}">
                                <a href="#links" class="has-arrow"><i class="fa fa-link"></i><span>Link Sistemi</span></a>
                                <ul>
                                    <li class="{{ Request::segment(2) === 'add-link' ? 'active' : null }}"><a href="{{route('add-link')}}">Yeni Link Ekle</a></li>
                                    <li class="{{ Request::segment(2) === 'all-links' ? 'active' : null }}"><a href="{{route('all-links')}}">Tüm Linkler</a></li>
                                    <li class="{{ Request::segment(2) === 'links-of-waiting-to-be-add' ? 'active' : null }}"><a href="{{route('links-of-waiting-to-be-add')}}">Eklenme Bekleyenler</a></li>
                                    <li class="{{ Request::segment(2) === 'key-code' ? 'active' : null }}"><a href="{{route('key-code')}}">KODU AL</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === 'tickets' ? 'active open' : null }}">
                                <a href="#tickets" class="has-arrow"><i class="fa fa-ticket"></i><span>Destek Sistemi</span></a>
                                <ul>
                                    <li class="{{ Request::segment(2) === 'all-tickets' ? 'active' : null }}"><a href="{{route('all-tickets')}}">Destek Talepleri</a></li>
                                    <li class="{{ Request::segment(2) === 'pending-tickets' ? 'active' : null }}"><a href="{{route('pending-tickets')}}">Cevap Bekleyenler</a></li>
                                    <li class="{{ Request::segment(2) === 'responded-tickets' ? 'active' : null }}"><a href="{{route('responded-tickets')}}">Cevaplananlar</a></li>
                                    <li class="{{ Request::segment(2) === 'resolved-tickets' ? 'active' : null }}"><a href="{{route('resolved-tickets')}}">Kapatılanlar</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === 'settings' ? 'active open' : null }}">
                                <a href="#settings" class="has-arrow"><i class="fa fa-cog"></i><span>Ayarlar</span></a>
                                <ul>
                                    <li class="{{ Request::segment(2) === 'landing-settings' ? 'active' : null }}"><a href="{{route('landing-settings')}}">Ön Sayfa Ayarları</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                @else
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu">
                            <li class="header">Sistem</li>
                            <li class="{{ Request::segment(1) === 'my-account' ? 'active open' : null }}">
                                <a href="#my-account" class="has-arrow"><i class="fa fa-user"></i><span>Hesabım</span></a>
                                <ul>
                                    <li class="{{ Request::segment(2) === 'my-account' ? 'active' : null }}"><a href="{{route('my-account')}}">Hesap Bilgilerim</a></li>
                                    <li class="{{ Request::segment(2) === 'my-sites' ? 'active' : null }}"><a href="{{route('my-sites')}}">Sitelerim</a></li>
                                    <li class="{{ Request::segment(2) === 'my-links' ? 'active' : null }}"><a href="{{route('my-links')}}">Satın Aldığım Linkler</a></li>
                                    <li class="{{ Request::segment(2) === 'buy-credit' ? 'active' : null }}"><a href="{{route('buy-credit')}}">Kredi Yükle</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === 'customer' ? 'active open' : null }}">
                                <a href="#customer" class="has-arrow"><i class="fa fa-link"></i><span>Link Sistemi</span></a>
                                <ul>
                                    <li class="{{ Request::segment(2) === 'all-links' ? 'active' : null }}"><a href="{{route('customer-all-links')}}">Linkler</a></li>
                                    <li class="{{ Request::segment(2) === 'report-error' ? 'active' : null }}"><a href="{{route('index')}}">Hata Bildir</a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::segment(1) === 'my-tickets' ? 'active open' : null }}">
                                <a href="#my-tickets" class="has-arrow"><i class="fa fa-link"></i><span>Destek Sistemi</span></a>
                                <ul>
                                    <li class="{{ Request::segment(2) === 'my-all-tickets' ? 'active' : null }}"><a href="{{route('my-all-tickets')}}">Destek Talepleri</a></li>
                                    <li class="{{ Request::segment(2) === 'my-pending-tickets' ? 'active' : null }}"><a href="{{route('my-pending-tickets')}}">Cevap Bekleyenler</a></li>
                                    <li class="{{ Request::segment(2) === 'my-responded-tickets' ? 'active' : null }}"><a href="{{route('my-responded-tickets')}}">Cevaplananlar</a></li>
                                    <li class="{{ Request::segment(2) === 'my-resolved-tickets' ? 'active' : null }}"><a href="{{route('my-resolved-tickets')}}">Kapatılanlar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                @endif
            @endif
        @endif

    </div>
</div>
