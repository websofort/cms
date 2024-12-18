@php
    $chooseUs = getContent('choose_us.content',true);
    $chooseUsElements = getContent('choose_us.element',false,6);
@endphp
<!-- ==================== Why Choose us Start Here ==================== -->
<section class="why-choose section" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Offer Different Services To Improve Your Health</h2>
                    <img src="{{ getImage(getFilePath('logoIcon').'/section-img.png') }}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3>Who We Are</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pharetra antege vel est lobortis, a commodo magna rhoncus. In quis nisi non emet quam pharetra commodo. </p>
                    <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list">
                                <li><i class="fa fa-caret-right"></i>Maecenas vitae luctus nibh. </li>
                                <li><i class="fa fa-caret-right"></i>Duis massa massa.</li>
                                <li><i class="fa fa-caret-right"></i>Aliquam feugiat interdum.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Choose Left -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <div class="choose-right">
                    <div class="video-image">
                        <!-- Video Animation -->
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <!--/ End Video Animation -->
                        <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <!-- End Choose Rights -->
            </div>
        </div>
    </div>
</section>
<!--/ End Why choose -->
{{--<section class="why-choose-area py-80">--}}
{{--    <img class="why-choose-bg" src="{{asset($activeTemplateTrue.'images/chooseus-bg.png')}}" alt="choose us image">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-7">--}}
{{--                <div class="">--}}
{{--                     <div class="section-heading">--}}
{{--                        <span class="subtitle">{{__(@$chooseUs->data_values->top_heading)}}</span>--}}
{{--                         <h2 class="section-heading__title">{{__(@$chooseUs->data_values->heading)}}</h2>--}}
{{--                         <p class="section-heading__desc mb-3">{{__(@$chooseUs->data_values->sub_heading)}}</p>--}}
{{--                     </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row gy-4 ">--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="why-choose-us__thumb">--}}
{{--                    <img class="img-1" src="{{getImage(getFilePath('chooseus').'/'.@$chooseUs->data_values->choose_image)}}" alt="choose us image">--}}
{{--                    <div class="popup-vide-wrap">--}}
{{--                        <div class="video-main">--}}
{{--                            <div class="promo-video">--}}
{{--                                <div class="waves-block">--}}
{{--                                    <div class="waves wave-1"></div>--}}
{{--                                    <div class="waves wave-2"></div>--}}
{{--                                    <div class="waves wave-3"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a class="play-video popup_video" href="{{$chooseUs->data_values->url}}">--}}
{{--                                <span class="play-btn"> <i class="fa fa-play"></i></span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-7">--}}
{{--                <div class="why-choose-us__content">--}}
{{--                    <h3>{{__(@$chooseUs->data_values->top_heading_2)}}</h3>--}}

{{--                    <p class="section-heading__desc mb-3">{{__(@$chooseUs->data_values->sub_heading_2)}}</p>--}}
{{--                    <div class="why-choose-us__topic">--}}
{{--                        @foreach($chooseUsElements as $item)--}}
{{--                        <div class="item">--}}
{{--                            <div class="why-title-cont d-flex align-items-center">--}}
{{--                                <i class="fas fa-check"></i>--}}
{{--                                <div class="content ms-3">--}}
{{--                                    <h4>--}}
{{--                                        @if(strlen(__(@$item->data_values->title)) >50)--}}
{{--                                        {{substr( __(@$item->data_values->title), 0,50).'...' }}--}}
{{--                                        @else--}}
{{--                                        {{__(@$item->data_values->title)}}--}}
{{--                                        @endif--}}
{{--                                    </h4>--}}
{{--                                    <p>--}}
{{--                                        @if(strlen(__(@$item->data_values->description)) >120)--}}
{{--                                        {{substr(__(@$item->data_values->description), 0,120).'...' }}--}}
{{--                                        @else--}}
{{--                                        {{__(@$item->data_values->description)}}--}}
{{--                                        @endif--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ==================== Why Choose us End Here ==================== -->
