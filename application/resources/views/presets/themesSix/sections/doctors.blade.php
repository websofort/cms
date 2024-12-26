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
                        <h2>Meet Our Qualified Doctors</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Doctors</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Team -->
    <section id="team" class="team section single-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ getImage(getFilePath('logoIcon').'/team2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="doctor-details.html">Collis Molate</a></h2>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="{{ getImage(getFilePath('logoIcon').'/team4.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="doctor-details.html">Domani Plavon</a></h2>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="{{ getImage(getFilePath('logoIcon').'/team1.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Dental Surgeon</p>
                            <h2><a href="doctor-details.html">John Mard</a></h2>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="{{ getImage(getFilePath('logoIcon').'/team3.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="doctor-details.html">Amanal Frond</a></h2>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <div class="t-head">
                            <img src="{{ getImage(getFilePath('logoIcon').'/team2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="doctor-details.html">Collis Molate</a></h2>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Team -->
                    <div class="single-team">
                        <!-- Team Head -->
                        <div class="t-head">
                            <img src="{{ getImage(getFilePath('logoIcon').'/team2.jpg') }}" alt="#" />
                            <div class="t-icon">
                                <a href="appointment.html" class="btn">Get Appointment</a>
                            </div>
                        </div>
                        <!-- Team Bottom -->
                        <div class="t-bottom">
                            <p>Neurosurgeon</p>
                            <h2><a href="doctor-details.html">Domani Plavon</a></h2>
                        </div>
                        <!--/ End Team Bottom -->
                    </div>
                    <!-- End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team -->

    <!-- Start Newsletter Area -->
    <section class="newsletter section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text">
                        <h6>Sign up for newsletter</h6>
                        <p class="">
                            Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br />
                            homero alterum.
                        </p>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-form">
                        <form
                            action="mail/mail.php"
                            method="get"
                            class="newsletter-inner"
                        >
                            <input
                                name="EMAIL"
                                placeholder="Your email address"
                                class="common-input"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Your email address'"
                                required=""
                                type="email"
                            />
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- /End Newsletter Area -->
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
