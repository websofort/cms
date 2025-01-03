@php
    $about = getContent('about.content',true);
    $aboutElements = getContent('about.element',false,6);
    $contact = getContent('contact_us.content',true);
@endphp
<!--========================== About Section Start ==========================-->
<div class="about-section pt-80 pb-100">
    <div class="container">
        <div class="row flex-wrap-reverse gy-4">
            <div class="col-lg-6">
                <div class="about-thumb">
                    <div class="about-thumb__inner">
                        <img class="img-2" src="{{getImage(getFilePath('about').'/'.@$about->data_values->about_image_1)}}" alt="@lang('image')">
                        <img class="img-1" src="{{getImage(getFilePath('about').'/'.@$about->data_values->about_image_2)}}" alt="@lang('image')">

                        <div class="about-contact d-flex align-items-center">
                            <i class="fas fa-phone"></i>
                            <div class="ms-3">
                                <h4>@lang('For Emergency')</h4>
                            <a href="tel:{{@$contact->data_values->contact_number}}">{{@$contact->data_values->contact_number}}</a>
                            </div>
                        </div>
                        <div class="about-contact-top">
                            <h4>{{__(@$about->data_values->experience)}}</h4>
                            <span>@lang('Years Of Experience')</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-right-content">
                     <div class="section-heading mb-0">
                        <span class="subtitle">@lang(__(@$about->data_values->top_heading))</span>
                         <h2 class="section-heading__title">{{__(@$about->data_values->heading)}}</h2>
                         <p class="section-heading__desc mb-3">
                            @if(strlen(__(@$about->data_values->description)) >280)
                            {{substr(__(@$about->data_values->description), 0,280).'...' }}
                            @else
                            {{__(@$about->data_values->description)}}
                            @endif
                        </p>
                         <ul class="about-service mb-4">
                            @foreach($aboutElements as $item)
                             <li>
                                 <span><i class="fas fa-check-circle"></i>{{__(@$item->data_values->content_list)}}</span>
                             </li>
                             @endforeach
                         </ul>
                         <div class="about-bottom">
                            <a href="{{url('/about')}}" class="btn btn--base me-3 mb-2">
                                @lang('View More') <i class="fa-sharp fas fa-arrow-right"></i>
                            </a>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--========================== About Section End ==========================-->
