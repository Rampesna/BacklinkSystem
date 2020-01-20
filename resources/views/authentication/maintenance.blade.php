@extends('layout.authentication')
@section('title', 'Maintenance')


@section('content')
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle maintenance">
        <div class="text-center">
            <article>
                <h1>We&rsquo;ll be back soon!</h1>
                <div>
                    <p>Sorry for the inconvenience<br> but we&rsquo;re performing some maintenance at the moment.<br> If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
                    <p>&mdash; The Team</p>
                </div>
            </article>
            <div class="margin-top-30">
                <a href="javascript:history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i><span>Go Back</span></a>
                <a href="{{route('mypage.index')}}" class="btn btn-info"><i class="fa fa-home"></i><span>Home</span></a>
            </div>
        </div>
        </div>
    </div>    
</div>
@stop

@section('page-styles')

@stop

@section('page-script')
@stop