<header>
    <div class="container-fluid position-relative no-side-padding">

        <a href="#" class="logo"><img src="{{asset('assets-landing\images\logo_black.png')}}" alt="Logo Image"></a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{route('home')}}">ANASAYFA</a></li>
            <li><a href="{{route('blog.index')}}">BLOG</a></li>
        </ul><!-- main-menu -->

        <div class="src-area">
            <form action="{{route('search')}}" method="post">
                {{csrf_field()}}
                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                <input class="src-input" name="keyword" type="text" placeholder="Ne Aramıştınız?">
            </form>
        </div>

    </div><!-- conatiner -->
</header>
