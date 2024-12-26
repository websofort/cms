@extends($activeTemplate.'layouts.frontend')
@section('content')
@php
    $contact = getContent('contact_us.content',true);
@endphp
<!-- ==================== Contact info Start Here ==================== -->
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                    <ul class="bread-list">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Contact Us -->
<section class="contact-us section">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-us-left">
                        <!--Start Google-map -->
                        <div id="myMap"></div>
                        <!--/End Google-map -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-form">
                        <h2>Contact With Us</h2>
                        <p>If you have any questions please fell free to contact with us.</p>
                        <!-- Form -->
                        <form class="form" method="post" action="mail/mail.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Your Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Send</button>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Do you want to subscribe our Newsletter ?</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-info">
            <div class="row">
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-ui-call"></i>
                        <div class="content">
                            <h3>+(000) 1234 56789</h3>
                            <p>info@company.com</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont-google-map"></i>
                        <div class="content">
                            <h3>2 Fir e Brigade Road</h3>
                            <p>Chittagonj, Lakshmipur</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
                <!-- single-info -->
                <div class="col-lg-4 col-12 ">
                    <div class="single-info">
                        <i class="icofont icofont-wall-clock"></i>
                        <div class="content">
                            <h3>Mon - Sat: 8am - 5pm</h3>
                            <p>Sunday Closed</p>
                        </div>
                    </div>
                </div>
                <!--/End single-info -->
            </div>
        </div>
    </div>
</section>
<!--/ End Contact Us -->

{{--<section class="contact-bottom py-80">--}}
{{--    <div class="container">--}}
{{--        <div class="row gy-4 justify-content-center">--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="contact-info" >--}}
{{--                    <div class="contact-info__addres-wrap mb-30">--}}
{{--                        <div class="single_wrapper">--}}
{{--                            <h4>@lang('Call Us')</h4>--}}
{{--                            <div class="single-info">--}}
{{--                                <div class="cont-icon">--}}
{{--                                    <i class="fas fa-phone"></i>--}}
{{--                                </div>--}}
{{--                                <div class="cont-text">--}}
{{--                                    <h6><a href="tel:{{$contact->data_values->contact_number}}">{{$contact->data_values->contact_number}}</a></h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                       </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="contact-info" >--}}
{{--                    <div class="contact-info__addres-wrap mb-30">--}}
{{--                        <div class="single_wrapper">--}}
{{--                            <h4>@lang('Email')</h4>--}}
{{--                            <div class="single-info">--}}
{{--                                <div class="cont-icon">--}}
{{--                                    <i class="far fa-envelope"></i>--}}
{{--                                </div>--}}
{{--                                <div class="cont-text">--}}
{{--                                    <h6><a href="mailto:{{$contact->data_values->email_address}}">{{$contact->data_values->email_address}}</a></h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                       </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <div class="contact-info" >--}}
{{--                    <div class="contact-info__addres-wrap mb-30">--}}
{{--                        <div class="single_wrapper">--}}
{{--                            <h4>@lang('Office')</h4>--}}
{{--                            <div class="single-info">--}}
{{--                                <div class="cont-icon">--}}
{{--                                    <i class="fas fa-map-marker-alt"></i>--}}
{{--                                </div>--}}
{{--                                <div class="cont-text">--}}
{{--                                    <h6><a>{{__($contact->data_values->contact_details)}}</a></h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                       </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- ==================== Contact info End Here ==================== -->--}}

{{--<!-- ==================== Contact Form Start Here ==================== -->--}}
{{--<section class="contact-bottom section-bg  py-80">--}}
{{--    <div class="container">--}}
{{--        <div class="row gy-4 justify-content-center align-items-center">--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="subscribe-right ">--}}
{{--                    <div class="thumb">--}}
{{--                       <img src="{{getImage(getFilePath('contact_us').'/'.@$contact->data_values->contact_image)}}" alt="contact image">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="contactus-form">--}}
{{--                    <h3 class="contact__title">{{__($contact->data_values->title)}}</h3>--}}
{{--                    <form method="post" action="" class="verify-gcaptcha">--}}
{{--                        @csrf--}}
{{--                        <div class="row gy-md-4 gy-3">--}}
{{--                            <div class="col-sm-12">--}}
{{--                                <label class="form-label">@lang('Name')</label>--}}
{{--                                <input name="name"  type="text" class="form--control"  value="@if(auth()->user()){{ auth()->user()->fullname }} @else{{ old('name') }}@endif"--}}
{{--                                @if(auth()->user()) readonly @endif required>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-12">--}}
{{--                                <label class="form-label">@lang('Email')</label>--}}
{{--                                <input name="email" type="email" class="form--control" value="@if(auth()->user()){{ auth()->user()->email }}@else{{  old('email') }}@endif"--}}
{{--                                @if(auth()->user()) readonly @endif required>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-12">--}}
{{--                                <label class="form-label">@lang('Subject')</label>--}}
{{--                                <input name="subject" type="text" class="form--control" value="{{old('subject')}}" required>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-12">--}}
{{--                                <label class="form-label">@lang('Message')</label>--}}
{{--                                <textarea class="form--control" name="message">{{old('message')}}</textarea>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-12">--}}
{{--                                <x-captcha></x-captcha>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-12">--}}
{{--                                <button type="submit" class="btn btn--base" id="recaptcha">--}}
{{--                                   @lang('Send Your Message')<i class="fas fa-paper-plane"></i>--}}
{{--                                    <span style="top: 249px; left: 75.9844px;"></span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<!-- ==================== Contact Form End Here ==================== -->--}}

{{--<!-- ==================== Map Start Here ==================== -->--}}
{{--<div>--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="contact-map">--}}
{{--            <iframe src="https://maps.google.com/maps?q={{ $contact->data_values->latitude }},{{ $contact->data_values->longitude }}&hl=es;z=14&amp;output=embed" width="600" height="450" allowfullscreen="" loading="lazy"></iframe>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ==================== Map Start Here ==================== -->
@endsection
