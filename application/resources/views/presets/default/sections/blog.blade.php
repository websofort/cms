@php
$blog = getContent('blog.content',true);
$blogs = getContent('blog.element',false,3);
@endphp
<!-- ==================== Blog Start Here ==================== -->
<!-- Start Blog Area -->
<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Keep up with Our Most Recent Medical News.</h2>
                    <img src="{{ getImage(getFilePath('logoIcon').'/section-img.png') }}" alt="#">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ getImage(getFilePath('logoIcon').'/blog1.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">22 Aug, 2020</div>
                            <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ getImage(getFilePath('logoIcon').'/blog2.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">15 Jul, 2020</div>
                            <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-news">
                    <div class="news-head">
                        <img src="{{ getImage(getFilePath('logoIcon').'/blog3.jpg') }}" alt="#">
                    </div>
                    <div class="news-body">
                        <div class="news-content">
                            <div class="date">05 Jan, 2020</div>
                            <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                            <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do eiusmod tempor incididunt sed do incididunt sed.</p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
{{--<section class="blog py-80">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-lg-10">--}}
{{--                <div class="section-heading  text-center">--}}
{{--                    <span class="subtitle">{{__(@$blog->data_values->top_heading)}}</span>--}}
{{--                    <h2 class="section-heading__title">{{__(@$blog->data_values->heading)}}</h2>--}}
{{--                    <p class="section-heading__desc mb-30">{{__(@$blog->data_values->sub_heading)}}</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        @include($activeTemplate.'components.blog')--}}
{{--    </div>--}}
{{--</section>--}}
<!-- ==================== Blog End Here ==================== -->
