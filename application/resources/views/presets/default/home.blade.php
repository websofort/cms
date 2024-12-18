@extends($activeTemplate.'layouts.frontend')
@section('content')
@php
    $banner = getContent('banner.content', true);
@endphp
    <!-- Slider Area -->
<section class="slider">
    <div class="hero-slider">
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url( {{ getImage(getFilePath('logoIcon').'/slider.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                            <div class="button">
                                <a href="#" class="btn">Get Appointment</a>
                                <a href="#" class="btn primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('{{ getImage(getFilePath('logoIcon').'/slider2.jpg') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>{{__(@$banner->data_values->heading)}}</h1>
{{--                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>--}}
                            <p>
                                @if(strlen(__(@$banner->data_values->sub_heading)) >180)
                                    {{substr( __(@$banner->data_values->sub_heading), 0,180).'...' }}
                                @else
                                    {{__(@$banner->data_values->sub_heading)}}
                                @endif
                            </p>
                            <div class="button">
                                <a href="#" class="btn">Get Appointment</a>
                                <a href="#" class="btn primary">About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start End Slider -->
        <!-- Start Single Slider -->
        <div class="single-slider" style="background-image:url('{{ getImage(getFilePath('logoIcon').'/slider3.jpg') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            <h1>We Provide <span>Medical</span> Services That You Can <span>Trust!</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam. </p>
                            <div class="button">
                                <a href="#" class="btn">Get Appointment</a>
                                <a href="#" class="btn primary">Conatct Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slider -->
    </div>
</section>
<!-- Start Schedule Area -->
<section class="schedule">
    <div class="container">
        <div class="schedule-inner">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 ">
                    <!-- single-schedule -->
                    <div class="single-schedule first">
                        <div class="inner">
                            <div class="icon">
                                <i class="fa fa-ambulance"></i>
                            </div>
                            <div class="single-content">
                                <span>Lorem Amet</span>
                                <h4>Emergency Cases</h4>
                                <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
                                <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule middle">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-prescription"></i>
                            </div>
                            <div class="single-content">
                                <span>Fusce Porttitor</span>
                                <h4>Doctors Timetable</h4>
                                <p>Lorem ipsum sit amet consectetur adipiscing elit. Vivamus et erat in lacus convallis sodales.</p>
                                <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- single-schedule -->
                    <div class="single-schedule last">
                        <div class="inner">
                            <div class="icon">
                                <i class="icofont-ui-clock"></i>
                            </div>
                            <div class="single-content">
                                <span>Donec luctus</span>
                                <h4>Opening Hours</h4>
                                <ul class="time-sidual">
                                    <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                                    <li class="day">Saturday <span>9.00-18.30</span></li>
                                    <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                                </ul>
                                <a href="#">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/End Start schedule Area -->
<!--/ End Slider Area -->
<!--========================== Banner Section Start ==========================-->
<!-- bg-img -->
{{--<section class="banner-section bg-img">--}}
{{--    <span class="banner-effect-2"></span>--}}
{{--    <div class="popup-vide-wrap">--}}
{{--      <div class="video-main">--}}
{{--          <div class="promo-video">--}}
{{--              <div class="waves-block">--}}
{{--                  <div class="waves wave-1"></div>--}}
{{--                  <div class="waves wave-2"></div>--}}
{{--                  <div class="waves wave-3"></div>--}}
{{--              </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--    </div>--}}

{{--    <div class="container">--}}
{{--        <div class="row gy-4 align-items-center">--}}
{{--            <div class="col-lg-6 col-md-6">--}}
{{--                  <div class="banner-left__content">--}}
{{--                    <span class="subtitle">{{__(@$banner->data_values->top_heading)}}</span>--}}
{{--                      <h2>{{__(@$banner->data_values->heading)}}</h2>--}}
{{--                      <p>--}}
{{--                        @if(strlen(__(@$banner->data_values->sub_heading)) >180)--}}
{{--                            {{substr( __(@$banner->data_values->sub_heading), 0,180).'...' }}--}}
{{--                        @else--}}
{{--                            {{__(@$banner->data_values->sub_heading)}}--}}
{{--                        @endif--}}
{{--                    </p>--}}
{{--                      <a href="{{url('/plan')}}" class="btn btn--base me-2 mb-2">--}}
{{--                          @lang('Get Started') <i class="fa-sharp fas fa-arrow-right"></i>--}}
{{--                      </a>--}}
{{--                      <a href="{{url('/contact')}}" class="btn btn--base outline mb-2">--}}
{{--                          @lang('Contact Us') <i class="far fa-id-card"></i>--}}
{{--                      </a>--}}
{{--                  </div>--}}
{{--              </div>--}}
{{--            <div class="col-lg-6 col-md-6">--}}
{{--              <div class="banner-right-wrap">--}}
{{--                  <img src="{{getImage(getFilePath('banner').'/'.@$banner->data_values->banner_image)}}" alt="@lang('image')">--}}
{{--              </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
  <!--========================== Banner Section End ==========================-->
@if($sections->secs != null)
@foreach(json_decode($sections->secs) as $sec)
@include($activeTemplate.'sections.'.$sec)
@endforeach
@endif

@endsection

