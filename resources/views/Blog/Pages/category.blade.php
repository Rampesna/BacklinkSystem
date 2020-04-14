@extends('Blog.Layouts.master')
@php(setlocale(LC_ALL, 'tr_TR.UTF-8'))
@section('content')

    <section class="blog-area section">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        @foreach($allPosts as $post)
                            <div class="col-lg-12 col-md-12">
                                <div class="card h-100">
                                    <div class="single-post post-style-2">

                                        <a href="{{route('blog.single',[$post->id,\App\Helpers\General::trimUrl($post->title)])}}" class="blog-image">
                                            <img src="{{asset($post->image)}}" alt="Blog Image">
                                        </a>

                                        <div class="blog-info">

                                            <h4 class="title">
                                                <a href="{{route('blog.single',[$post->id,\App\Helpers\General::trimUrl($post->title)])}}">
                                                    <b>
                                                        {{$post->title}}
                                                    </b>
                                                </a>
                                            </h4>

                                            <p>&emsp;{{substr(strip_tags($post->content),0,254)."..."}}</p>

                                            <div class="avatar-area">
                                                <div class="left-area">
                                                    <h6 class="date">{{strftime("%Y %B %d %H:%M:%S",strtotime($post->created_at))}}</h6>
                                                </div>
                                            </div>

                                            <ul class="post-footer">
                                                <li class="float-right">
                                                    <a>
                                                        <i class="ion-eye"></i>
                                                        {{$post->views}}
                                                    </a>
                                                </li>
                                                <li class="float-right">
                                                    <a href="#">
                                                        <i class="ion-chatbubble"></i>
                                                        {{\App\Models\BlogCommentsTableModel::where('post_id',$post->id)->count()}}
                                                    </a>
                                                </li>
                                            </ul>

                                        </div><!-- blog-right -->

                                    </div><!-- single-post extra-blog -->

                                </div><!-- card -->
                            </div><!-- col-lg-12 col-md-12 -->
                        @endforeach
                    </div><!-- row -->

                    @if($allPostsCount > 0)
                        @if($page == 1)
                            @if($allPostsCount > 10)
                                <a class="load-more-btn" href="#"><b>Sonraki Sayfa</b></a>
                            @endif
                        @else
                            <a class="load-more-btn" href="#"><b>Önceki Sayfa</b></a>
                            @if($allPostsCount > ($page * 10))
                                <a class="load-more-btn" href="#"><b>Sonraki Sayfa</b></a>
                            @endif
                        @endif
                    @endif

                </div><!-- col-lg-8 col-md-12 -->

                <div class="col-lg-4 col-md-12 ">

                    <div class="single-post info-area ">

                        <div class="tag-area">

                            <h4 class="title"><b>KATEGORİLER</b></h4>
                            <ul>
                                @foreach($categories as $category)
                                    <li><a>{{$category->name}}</a></li><br>
                                @endforeach
                            </ul>
                        </div><!-- subscribe-area -->

                    </div><!-- info-area -->

                </div><!-- col-lg-4 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section><!-- section -->

@endsection
