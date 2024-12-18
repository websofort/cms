@php
    $links = getContent('policy_pages.element');
    $importantLinks = getContent('footer_important_links.element', false, null, true);
    $companyLinks = getContent('footer_company_links.element', false, null, true);
    $subscribe = getContent('subscribe.content', true);
    $contact = getContent('contact_us.content',true);
    $socialIcons = getContent('social_icon.element',false);
@endphp
<!-- ==================== Footer Start Here ==================== -->
<!-- Footer Area -->
<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-google-plus"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-vimeo"></i></a></li>
                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>Quick Links</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Open Hours</h2>
                        <p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
                        <ul class="time-sidual">
                            <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                            <li class="day">Saturday <span>9.00-18.30</span></li>
                            <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Newsletter</h2>
                        <p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Your email address'" required="" type="email">
                            <button class="button"><i class="icofont icofont-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->
{{--<footer class="footer-area section-bg-light bg-img" style="background-image: url({{asset($activeTemplateTrue.'images/footer-bg.jpg')}})">--}}
{{--    <span class="banner-effect-1"></span>--}}
{{--    <div class="pb-60 pt-80">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center gy-5">--}}
{{--                <div class="col-xl-4 col-sm-6">--}}
{{--                    <div class="footer-item">--}}

{{--                        <div class="footer-item__logo">--}}
{{--                            <a href="{{route('home')}}" class="footer-logo-normal" id="footer-logo-normal">--}}
{{--                            <img src="{{ getImage(getFilePath('logoIcon').'/logo_white.png', '?'.time()) }}" alt="{{config('app.name')}}">--}}
{{--                        </a>--}}
{{--                            <a href="{{route('home')}}" class="footer-logo-dark hidden" id="footer-logo-dark">--}}
{{--                            <img src="{{ getImage(getFilePath('logoIcon').'/logo_white.png', '?'.time()) }}" alt="{{config('app.name')}}">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <p class="footer-item__desc mb-3">--}}
{{--                            @if(strlen(__(@$contact->data_values->short_description)) >150)--}}
{{--                            {{substr(__(@$contact->data_values->short_description), 0,150).'...' }}--}}
{{--                            @else--}}
{{--                            {{__(@$contact->data_values->short_description)}}--}}
{{--                            @endif--}}
{{--                        </p>--}}

{{--                        <ul class="footer-contact-menu">--}}
{{--                            <li class="footer-contact-menu__item">--}}
{{--                                <div class="footer-contact-menu__item-icon">--}}
{{--                                    <i class="fas fa-map-marker-alt"></i>--}}
{{--                                </div>--}}
{{--                                <div class="footer-contact-menu__item-content">--}}
{{--                                    <p>{{__(@$contact->data_values->contact_details)}}</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="footer-contact-menu__item">--}}
{{--                                <div class="footer-contact-menu__item-icon">--}}
{{--                                    <i class="fas fa-envelope"></i>--}}
{{--                                </div>--}}
{{--                                <div class="footer-contact-menu__item-content">--}}
{{--                                    <p>{{@$contact->data_values->email_address}}</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="footer-contact-menu__item">--}}
{{--                                <div class="footer-contact-menu__item-icon">--}}
{{--                                    <i class="fas fa-phone"></i>--}}
{{--                                </div>--}}
{{--                                <div class="footer-contact-menu__item-content">--}}
{{--                                    <p>{{$contact->data_values->contact_number}}</p>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-2 col-sm-6">--}}
{{--                    <div class="footer-item">--}}
{{--                        <h5 class="footer-item__title">@lang('Company Links')</h5>--}}
{{--                        <ul class="footer-menu">--}}
{{--                            @foreach($companyLinks as $link)--}}
{{--                            <li class="footer-menu__item"><a href="{{url('/').$link->data_values->url}}" class="footer-menu__link">{{$link->data_values->title}}</a></li>--}}
{{--                            @endforeach--}}
{{--                            @foreach($links as $link)--}}
{{--                            <li class="footer-menu__item"><a href="{{ route('policy.pages', [slug($link->data_values->title), $link->id]) }}" class="footer-menu__link">{{$link->data_values->title}}</a></li>--}}
{{--                            @endforeach--}}

{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-sm-6">--}}
{{--                    <div class="footer-item">--}}
{{--                        <h5 class="footer-item__title">@lang('Important Link')</h5>--}}
{{--                        <ul class="footer-menu">--}}
{{--                            @foreach($importantLinks as $link)--}}
{{--                            <li class="footer-menu__item"><a href="{{url('/').$link->data_values->url}}" class="footer-menu__link">{{$link->data_values->title}}</a></li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-3 col-sm-6">--}}
{{--                    <div class="footer-item">--}}
{{--                        <h5 class="footer-item__title">@lang('Newsletter')</h5>--}}

{{--                        <p class="footer-item__desc mb-3">--}}
{{--                            @if(strlen(__(@$subscribe->data_values->sub_heading)) >50)--}}
{{--                            {{substr(__(@$subscribe->data_values->sub_heading), 0,50).'...' }}--}}
{{--                            @else--}}
{{--                            {{__(@$subscribe->data_values->sub_heading)}}--}}
{{--                            @endif--}}
{{--                        </p>--}}

{{--                        <form action="{{route('subscribe')}}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <div class="search-box footer-area w-100">--}}
{{--                                <input type="text" class="form--control" name="email" placeholder="Email...">--}}
{{--                                <button type="submit" class="btn btn--base btn--sm">@lang('Subscribe')</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}

{{--                        <ul class="social-list">--}}
{{--                            @foreach($socialIcons as $item)--}}
{{--                            <li class="social-list__item"><a href="{{$item->data_values->url}}" class="social-list__link" target="_blank">@php echo $item->data_values->social_icon @endphp</a> </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--  <!-- Footer Top End-->--}}
{{--    <!-- bottom Footer -->--}}
{{--    <div class="bottom-footer section-bg py-3">--}}
{{--        <div class="container">--}}
{{--            <div class="row gy-2">--}}
{{--                <div class="col-lg-6 col-md-12">--}}
{{--                    <div class="bottom-footer-text">@php echo $contact->data_values->website_footer @endphp</div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12">--}}
{{--                    <div class="bottom-footer-menu">--}}
{{--                        <ul>--}}
{{--                            @foreach($links as $link)--}}
{{--                            <li><a href="{{ route('policy.pages', [slug($link->data_values->title), $link->id]) }}" target="_blank">{{$link->data_values->title}}</a></li>--}}
{{--                            @endforeach--}}
{{--                            <li><a href="{{url('/cookie-policy')}}" target="_blank">@lang('Cookie Policy')</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}
  <!-- ==================== Footer End Here ==================== -->
