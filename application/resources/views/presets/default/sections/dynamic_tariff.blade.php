@php
    $about = getContent('dynamic_tariff.content',true);
    $aboutElements = getContent('dynamic_tariff.element',false,6);
    $contact = getContent('contact_us.content',true);
@endphp
    <!--========================== About Section Start ==========================-->
<div class="about-section pt-80 pb-100">
    <div class="container">
        <div class="row flex-wrap-reverse gy-4">
            <div class="col-lg-6">
                <div class="about-thumb">


                        <img class="img-1" src="{{getImage(getFilePath('dynamic_tariff').'/'.@$about->data_values->dynamic_tariff_1)}}" alt="@lang('image')">

                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-right-content">
                    <div class="section-heading mb-0">
                        <h2 class="section-heading__title">{{__(@$about->data_values->heading)}}</h2>
                        <p class="section-heading__desc mb-3">
                            @if(strlen(__(@$about->data_values->description)) >280)
                                {{substr(__(@$about->data_values->description), 0,280).'...' }}
                            @else
                                {{__(@$about->data_values->description)}}
                            @endif
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--========================== About Section End ==========================-->
