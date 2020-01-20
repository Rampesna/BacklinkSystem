@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Light Gallery')


@section('content')
<div id="lightgallery" class="row clearfix lightGallery">
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/1.jpg"><img class="img-fluid rounded" src="../assets/images/image-gallery/1.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/2.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/2.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/3.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/3.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/4.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/4.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/5.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/5.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/6.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/6.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/7.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/7.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/8.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/8.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/9.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/9.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/10.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/10.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/11.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/11.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/12.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/12.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/13.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/13.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/14.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/14.jpg" alt=""></a></div>
    <div class="col-lg-3 col-md-6 m-b-30"><a class="light-link" href="../assets/images/image-gallery/15.jpg" ><img class="img-fluid rounded" src="../assets/images/image-gallery/15.jpg" alt=""></a></div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/light-gallery/css/lightgallery.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/lightgallery.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/medias/image-gallery.js') }}"></script>
@stop