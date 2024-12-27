@php
    $chooseUs = getContent('why_choose.content',true);
    $chooseUsElements = getContent('why_choose.element',false,6);
@endphp
<!-- ==================== Why Choose us Start Here ==================== -->
<section class="why-choose-area  py-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                     <div class="section-heading">
                         <h2 class="section-heading__title">{{__(@$chooseUs->data_values->heading)}}</h2>
                         <p class="section-heading__desc mb-3">{{__(@$chooseUs->data_values->sub_heading)}}</p>
                     </div>
                </div>
            </div>
        </div>

        <div class="row gy-4 ">
            <div class="col-lg-12" style="place-items: center;">
                <div class="why-choose-us__content">
                   {{-- <h3>{{__(@$chooseUs->data_values->top_heading_2)}}</h3>

                    <p class="section-heading__desc mb-3">{{__(@$chooseUs->data_values->sub_heading_2)}}</p>--}}
                    <div class="why-choose-us__topic flex-row">
                        @foreach($chooseUsElements as $item)
                        <div class="item">
                            <div class="why-title-cont d-flex align-items-center">
                                {!! __(@$item->data_values->service_icon) !!}
                                <div class="content ms-3">
                                    <h4>
                                        @if(strlen(__(@$item->data_values->title)) >50)
                                        {{substr( __(@$item->data_values->title), 0,50).'...' }}
                                        @else
                                        {{__(@$item->data_values->title)}}
                                        @endif
                                    </h4>
                                    <p>
                                        @if(strlen(__(@$item->data_values->description)) >120)
                                        {{substr(__(@$item->data_values->description), 0,120).'...' }}
                                        @else
                                        {{__(@$item->data_values->description)}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Why Choose us End Here ==================== -->
