@extends($activeTemplate.'layouts.frontend')
@section('content')
<!-- ==================== Blog Start Here ==================== -->
<!-- clients -->
<div class="clients overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="owl-carousel clients-slider">
                    <div class="single-clients">
                        <img src="img/client1.png" alt="#" />
                    </div>
                    <div class="single-clients">
                        <img src="img/client2.png" alt="#" />
                    </div>
                    <div class="single-clients">
                        <img src="img/client3.png" alt="#" />
                    </div>
                    <div class="single-clients">
                        <img src="img/client4.png" alt="#" />
                    </div>
                    <div class="single-clients">
                        <img src="img/client5.png" alt="#" />
                    </div>
                    <div class="single-clients">
                        <img src="img/client1.png" alt="#" />
                    </div>
                    <div class="single-clients">
                        <img src="img/client2.png" alt="#" />
                    </div>
                    <div class="single-clients">
                        <img src="img/client3.png" alt="#" />
                    </div>
                    <div class="single-clients">
                        <img src="img/client4.png" alt="#" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Ens clients -->

<!-- Start Appointment -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                    <img src="img/section-img.png" alt="#" />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit praesent
                        aliquet. pretiumts
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0">
                                    <span class="current">Department</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">
                                            Department
                                        </li>
                                        <li data-value="2" class="option">Cardiac Clinic</li>
                                        <li data-value="3" class="option">Neurology</li>
                                        <li data-value="4" class="option">Dentistry</li>
                                        <li data-value="5" class="option">Gastroenterology</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0">
                                    <span class="current">Doctor</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">Doctor</li>
                                        <li data-value="2" class="option">
                                            Dr. Akther Hossain
                                        </li>
                                        <li data-value="3" class="option">Dr. Dery Alex</li>
                                        <li data-value="4" class="option">Dr. Jovis Karon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" placeholder="Date" id="datepicker" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                    <textarea
                        name="message"
                        placeholder="Write Your Message Here....."
                    ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">
                                        Book An Appointment
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <p>( We will be confirm by an Text Message )</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="appointment-image">
                    <img src="img/contact-img.png" alt="#" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--/End Appointment -->

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
{{--<section class="blog-detials py-60">--}}
{{--    <div class="container">--}}
{{--        <div class="row gy-5 justify-content-center">--}}
{{--            <div class="col-lg-8">--}}
{{--                <div class="blog-details service-details">--}}
{{--                   <div class="blog-details__content">--}}
{{--                        <p class="blog-details__desc wyg">--}}
{{--                            @php--}}
{{--                               echo $service->description;--}}
{{--                            @endphp--}}
{{--                        </p>--}}
{{--                        <div class="blog-details__share mt-4 d-flex align-items-center flex-wrap mb-4">--}}
{{--                            <h5 class="social-share__title mb-0 me-sm-3 me-1 d-inline-block">@lang('Share This')</h5>--}}
{{--                            <ul class="social-list blog-details">--}}
{{--                                <li class="social-list__item" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook"> <a class="social-list__link" target="_blank" href="https://www.facebook.com/share.php?u={{ Request::url() }}&title={{slug(@$service->title)}}"><i class="lab la-facebook-f"></i></a> </li>--}}
{{--                                <li class="social-list__item" data-bs-toggle="tooltip" data-bs-placement="top" title="Linkedin"> <a class="social-list__link" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}&title={{slug(@$service->title)}}&source=behands"><i class="lab la-linkedin-in"></i></a> </li>--}}
{{--                                <li class="social-list__item" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter"> <a class="social-list__link" target="_blank" href="https://twitter.com/intent/tweet?status={{slug(@$service->title)}}+{{ Request::url() }}"><i class="lab la-twitter"></i></a> </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                   </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4">--}}
{{--                <!-- ============================= Blog Details Sidebar Start ======================== -->--}}
{{--                    <div class="blog-sidebar-wrapper">--}}
{{--                        <div class="blog-sidebar text-center">--}}
{{--                            <h5>@lang('Price'): {{__($general->cur_sym)}} {{showAmount($service->price)}}</h5>--}}
{{--                            <a href="{{route('user.service.payment',$service->id)}}" class="btn btn--base">@lang('Buy Now')</a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-sidebar">--}}
{{--                            <h5 class="blog-sidebar__title">@lang('Latests')</h5>--}}
{{--                            @foreach ($latests as $item)--}}
{{--                            <div class="latest-blog">--}}
{{--                                <div class="latest-blog__content">--}}
{{--                                    <h6 class="latest-blog__title"><a href="{{ route('service.details', ['slug' => slug($item->title), 'id' => $item->id])}}">--}}
{{--                                        @if(strlen(__($item->title)) >50)--}}
{{--                                        {{substr( __($item->title), 0,50).'...' }}--}}
{{--                                        @else--}}
{{--                                        {{__($item->title)}}--}}
{{--                                        @endif--}}
{{--                                    </a></h6>--}}
{{--                                    <span class="latest-blog__date">{{showDateTime($item->created_at)}}</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--<!-- ============================= Blog Details Sidebar End ======================== -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ==================== Blog End Here ==================== -->
@endsection

@push('style')
    <style>
        .wyg h1,
        .wyg h2,
        .wyg h3,
        .wyg h4 {
            color: hsl(var(--black));
        }

        .wyg p {
            color: hsl(var(--black));
        }

        .wyg ul {
            margin: 35px;
        }

        .wyg ul li {
            list-style-type: disc;
            color: hsl(var(--black));
            font-family: var(--body-font);
        }

        /*========= dark css =======*/
        .dark .wyg h1,
        .dark .wyg h2,
        .dark .wyg h3,
        .dark .wyg h4 {
            color: hsl(var(--white));
        }

        .dark .wyg p {
            color: hsl(var(--white));
        }

        .dark .wyg ul {
            margin: 35px;
        }

        .dark .wyg ul li {
            list-style-type: disc;
            color: hsl(var(--white));
        }
    </style>
@endpush


