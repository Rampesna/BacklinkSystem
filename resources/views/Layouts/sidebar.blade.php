<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{route('index')}}"><img src="../assets/images/icon.svg" alt="Oculux Logo" class="img-fluid logo"><span>Oculux</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu fa fa-chevron-circle-left"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="../assets/images/user.png" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Louis Pierce</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="{{route('index')}}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="{{route('index')}}"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('index')}}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main</li>
                <li class="{{ Request::segment(1) === 'index' ? 'active open' : null }}">
                    <a href="#myPage" class="has-arrow"><i class="icon-home"></i><span>My Page</span></a>
                    <ul>
                        <li class="{{ Request::segment(2) === 'index' ? 'active' : null }}"><a href="{{route('index')}}">My Dashboard</a></li>
                        <li class="{{ Request::segment(2) === 'index4' ? 'active' : null }}"><a href="{{route('index')}}">Web Analytics</a></li>
                        <li class="{{ Request::segment(2) === 'index5' ? 'active' : null }}"><a href="{{route('index')}}">Event Monitoring</a></li>
                        <li class="{{ Request::segment(2) === 'index6' ? 'active' : null }}"><a href="{{route('index')}}">Finance Performance</a></li>
                        <li class="{{ Request::segment(2) === 'index7' ? 'active' : null }}"><a href="{{route('index')}}">Sales Monitoring</a></li>
                        <li class="{{ Request::segment(2) === 'index8' ? 'active' : null }}"><a href="{{route('index')}}">Hospital Management</a></li>
                        <li class="{{ Request::segment(2) === 'index9' ? 'active' : null }}"><a href="{{route('index')}}">Campaign Monitoring</a></li>
                        <li class="{{ Request::segment(2) === 'index10' ? 'active' : null }}"><a href="{{route('index')}}">University Analytics</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
