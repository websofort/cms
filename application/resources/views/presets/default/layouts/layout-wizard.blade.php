<!doctype html>
<html lang="{{ config('app.locale') }}" itemscope itemtype="http://schema.org/WebPage">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ $general->siteName(__($pageTitle)) }}</title>
    @include('includes.seo')
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/common/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/common/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/common/css/line-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/icofont.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/slicknav.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/owl-carousel.css')}}">



    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/header-wizard.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/main.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/step-1-wizard.css')}}">

    @stack('style-lib')
    @stack('style')
    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/color.php') }}?color={{ $general->base_color }}&secondColor={{ $general->secondary_color }}">

</head>
<body>
@include($activeTemplate.'components.header-wizard')
@yield('content')


<script src="{{asset('assets/common/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets/common/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/popper.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/bootstrap.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/slick.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/moment.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/jquery.appear.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/odometer.min.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/viewport.jquery.js')}}"></script>
<script src="{{asset($activeTemplateTrue.'js/step-1-wizard.js')}}"></script>


</body>

</html>
