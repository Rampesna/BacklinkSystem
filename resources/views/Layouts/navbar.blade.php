<nav class="navbar top-navbar">
    <div class="container-fluid">
        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="{{route('index')}}"><img src="{{asset('assets/images/icon.svg')}}" alt="Oculux Logo" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
        </div>
        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    @php($balanceControl = \Illuminate\Support\Facades\Auth::user())
{{--                    <li><a href="javascript:void(0);" class="search_toggle icon-menu" title="Search Result"><i class="icon-magnifier"></i></a></li>--}}
                    @if($balanceControl->is_admin == 0)
                        <li><a href="{{route('buy-credit')}}" style="color: white" class="btn btn-outline-success">Kalan Bakiye {{$balanceControl->balance}} ₺</a></li>
                    @endif
                    <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="icon-menu"><i class="icon-power"></i></a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
</nav>
