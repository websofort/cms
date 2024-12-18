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

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/custom-animation.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/slick.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/main.css')}}">
    <link rel="stylesheet" href="{{asset($activeTemplateTrue.'css/style.css')}}">

    @stack('style-lib')

    @stack('style')

    <link rel="stylesheet" href="{{ asset($activeTemplateTrue.'css/color.php') }}?color={{ $general->base_color }}&secondColor={{ $general->secondary_color }}">
</head>
<body>

 @include($activeTemplate.'components.loader')
 @include($activeTemplate.'components.header')

 @if(request()->route()->uri != '/')
    @include($activeTemplate.'components.breadcrumb')
 @endif

 <div class="dashboard py-60 section-bg-two">
    <div class="container">
        <div class="row gy-5">
            @include($activeTemplate.'components.side_nav')
            @yield('content')
        </div>
    </div>
 </div>

@include($activeTemplate.'components.footer')
@include($activeTemplate.'components.cookie')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{-- <script src="{{asset($activeTemplateTrue.'js/jquery.min.js')}}"></script>--}}
 <script src="{{asset($activeTemplateTrue.'js/jquery-migrate-3.0.0.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/jquery-ui.min.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/easing.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/colors.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/bootstrap-datepicker.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/jquery.nav.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/slicknav.min.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/jquery.scrollUp.min.js')}}"></script>

 <script src="{{asset($activeTemplateTrue.'js/niceselect.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/tilt.jquery.min.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/owl-carousel.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/jquery.counterup.min.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/steller.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/wow.min.js')}}"></script>
 <script src="{{asset($activeTemplateTrue.'js/jquery.magnific-popup.min.js')}}"></script>
 <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

{{--<script src="{{asset('assets/common/js/jquery-3.7.1.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/common/js/bootstrap.bundle.min.js')}}"></script>--}}
{{--<script src="{{asset($activeTemplateTrue.'js/popper.min.js')}}"></script>--}}
{{--<script src="{{asset($activeTemplateTrue.'js/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset($activeTemplateTrue.'js/slick.min.js')}}"></script>--}}
{{--<script src="{{asset($activeTemplateTrue.'js/moment.min.js')}}"></script>--}}
{{--<script src="{{asset($activeTemplateTrue.'js/jquery.appear.min.js')}}"></script>--}}
{{--<script src="{{asset($activeTemplateTrue.'js/jquery.magnific-popup.min.js')}}"></script>--}}
{{--<script src="{{asset($activeTemplateTrue.'js/odometer.min.js')}}"></script>--}}
{{--<script src="{{asset($activeTemplateTrue.'js/viewport.jquery.js')}}"></script>--}}
<script src="{{asset($activeTemplateTrue.'js/main.js')}}"></script>



@stack('script-lib')

@stack('script')

@include('includes.plugins')

@include('includes.notify')

<script>
    (function ($) {
        "use strict";

        $(".langSel").on("change", function() {
            window.location.href = "{{route('home')}}/change/"+$(this).val() ;
        });

        $('.policy').on('click',function(){
            $.get('{{route('cookie.accept')}}', function(response){
                $('.cookies-card').addClass('d-none');
            });
        });

        setTimeout(function(){
            $('.cookies-card').removeClass('hide')
        },2000);


    })(jQuery);

</script>
</body>
</html>
