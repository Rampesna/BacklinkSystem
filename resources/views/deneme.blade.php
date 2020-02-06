<!DOCTYPE html>
<html lang="en">
<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the apple mobile web app capable -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- set the HandheldFriendly -->
    <meta name="HandheldFriendly" content="True">
    <!-- set the apple mobile web app status bar style -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- set the description -->
    <meta name="description" content="EXO | SEO Landing page Template">
    <!-- set the Keyword -->
    <meta name="keywords" content="agency, business, corporate, creative, digital agency, marketing, marketing agency, online marketing, seo, seo agency, seo business, seo company, seo website ">
    <meta name="author" content="EXO | SEO Landing page Template">
    <title>EXO | SEO Landing page Template</title>
    <!-- include the site stylesheet -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700%7COpen+Sans:300,300i,600" rel="stylesheet">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\font-awesome.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\bootstrap.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\plugins.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\style.css')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\colors.csss')}}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{asset('assets-landing\css\responsive.css')}}">
    <!-- include the site stylesheet -->
    <style class="color_css"></style>
</head>
<body>


<?php

$filename = 'http://backlisnksatisi.com/deneme.php';
$searchfor = 'abc.com';
try {
    $file = file_get_contents($filename);
    if (strpos($file, $searchfor)) {
        echo "Var";
    }else{
        echo "Yok";
    }
}catch (Exception $e){
    echo "Yok 2";
}



?>




<script src="{{asset('assets-landing\js\jquery.js')}}"></script>
<!-- include jQuery -->
<script src="{{asset('assets-landing\js\plugins.js')}}"></script>
<!-- include jQuery -->
<script src="{{asset('assets-landing\js\jquery.main.js')}}"></script>

</body>
</html>
