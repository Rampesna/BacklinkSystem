<!DOCTYPE HTML>
<html lang="tr">
<head>
    @php(setlocale(LC_ALL, 'tr_TR.UTF-8'))
    <title>{{$post->title}} | Backlinksatisi.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="description" content="{{$post->seo_description}}">
    <meta name="keywords" content="{{$post->seo_keywords}}">

    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link href="{{asset('assets-blog/common-css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{asset('assets-blog/common-css/ionicons.css')}}" rel="stylesheet">


    <link href="{{asset('assets-blog/single-post-2/css/styles.css')}}" rel="stylesheet">

    <link href="{{asset('assets-blog/single-post-2/css/responsive.css')}}" rel="stylesheet">

</head>
<body >

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

<div class="slider">

</div><!-- slider -->

<section class="post-area">
    <div class="container">

        <div class="row">

            <div class="col-lg-1 col-md-0"></div>
            <div class="col-lg-10 col-md-12">

                <div class="main-post">

                    <div class="post-top-area">

                        <h3 class="title"><a href="#"><b>{{$post->title}}</b></a></h3>

                        <div class="post-image"><img src="{{asset($post->image)}}" alt="Blog Image"></div>

                        <p class="para">{!! $post->content !!}</p>

                    </div><!-- post-top-area -->


                    <div class="post-bottom-area">

                        <ul class="tags">
                            @foreach($tags as $tag)
                                <li><a>{{$tag}}</a></li>
                            @endforeach
                        </ul>

                        <div class="post-icons-area">
                            <ul class="post-icons">
                                <li><a href="#"><i class="ion-chatbubble"></i>{{\App\Models\BlogCommentsTableModel::where('post_id',$post->id)->count()}}</a></li>
                                <li><a href="#"><i class="ion-eye"></i>{{$post->views}}</a></li>
                            </ul>

                            <ul class="icons">
                                <h6 class="date">{{strftime("%d %B %Y",strtotime($post->created_at))}}</h6>
                            </ul>
                        </div>

                    </div><!-- post-bottom-area -->

                </div><!-- main-post -->
            </div><!-- col-lg-8 col-md-12 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- post-area -->


<section class="recomended-area section">
    <div class="container">
        <h4><b>DİĞER YAZILARIMIZ</b></h4>
        <hr>
        <div class="row">
            @foreach($randoms as $random)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="{{asset($random->image)}}" alt="Blog Image"></div>

                            <div class="blog-info">

                                <h4 class="title"><a href="{{route('blog.single',[$random->id,\App\Helpers\General::trimUrl($random->title)])}}"><b>{{$random->title}}</b></a></h4>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-md-6 col-sm-12 -->
            @endforeach
        </div><!-- row -->
        <hr>
    </div><!-- container -->
</section>

<section class="comment-section center-text">
    <div class="container">
        <h4><b>YORUM YAP</b></h4>
        <div class="row">

            <div class="col-lg-2 col-md-0"></div>

            <div class="col-lg-8 col-md-12">

                @if(isset($errorMessage))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <i class="fa fa-times-circle"></i> {{$errorMessage}}
                    </div>
                @elseif(isset($successMessage))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <i class="fa fa-times-circle"></i> {{$successMessage}}
                    </div>
                @endif

                <div class="comment-form">
                    <form method="post" action="{{route('submit-comment')}}">
                        {{csrf_field()}}
                        <div class="row">

                            <input type="hidden" value="{{$post->id}}" name="post_id">
                            <div class="col-sm-6">
                                <input type="text" aria-required="true" name="comment_name_surname" class="form-control"
                                       placeholder="Adınız Soyadınız" aria-invalid="true" required >
                            </div><!-- col-sm-6 -->
                            <div class="col-sm-6">
                                <input type="email" aria-required="true" name="comment_email" class="form-control"
                                       placeholder="E-posta Adresiniz" aria-invalid="true" required>
                            </div><!-- col-sm-6 -->

                            <div class="col-sm-12">
									<textarea required name="comment_content" rows="2" class="text-area-messge form-control"
                                              placeholder="Yorumunuz" aria-required="true" aria-invalid="false"></textarea >
                            </div><!-- col-sm-12 -->
                            <div class="col-sm-12">
                                <button class="submit-btn" type="submit" id="form-submit"><b>YORUM YAP</b></button>
                            </div><!-- col-sm-12 -->

                        </div><!-- row -->
                    </form>
                </div><!-- comment-form -->

                    <h4><b>YORUMLAR ({{count($postComments)}})</b></h4>

                @if(count($postComments) > 0)
                    <div class="commnets-area text-left">

                        @foreach($postComments as $comment)

                            <div class="comment">

                                <div class="post-info">

                                    <div class="float-left">
                                        <a class="name"><b>{{$comment->name_surname}}</b></a><br>
                                        <h6 class="date">{{strftime("%d %B %Y - %H:%M:%S",strtotime($comment->created_at))}}</h6>
                                    </div>

                                </div><!-- post-info -->
                                <br>
                                <p>{{$comment->content}}</p>

                            </div>

                        @endforeach

                    </div><!-- commnets-area -->
                @endif


            </div><!-- col-lg-8 col-md-12 -->

        </div><!-- row -->

    </div><!-- container -->
</section>

<footer class="text-center">

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-6">
                <div class="footer-section">

                    <a class="logo" href="{{route('blog.index')}}"><img style="width: 100px;height: auto" src="{{asset('assets-landing\images\logo_black.png')}}" alt="Logo Image"></a>
                    <p class="copyright">2020 © Tüm Hakları Saklıdır.</p>
                    <ul class="icons">
                        <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                        <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                    </ul>

                </div><!-- footer-section -->
            </div><!-- col-lg-4 col-md-6 -->

        </div><!-- row -->
    </div><!-- container -->
</footer>


<!-- SCIPTS -->

<script src="{{asset('assets-blog/common-js/jquery-3.1.1.min.js')}}"></script>

<script src="{{asset('assets-blog/common-js/tether.min.js')}}"></script>

<script src="{{asset('assets-blog/common-js/bootstrap.js')}}"></script>

<script src="{{asset('assets-blog/common-js/scripts.js')}}"></script>

</body>
</html>
