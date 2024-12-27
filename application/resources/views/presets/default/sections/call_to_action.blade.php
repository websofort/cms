@php
    $about = getContent('call_to_action.content',true);
    $aboutElements = getContent('call_to_action.element',false,6);
    $contact = getContent('contact_us.content',true);
@endphp
    <!--========================== About Section Start ==========================-->
<div class="about-section section-bg pt-80 pb-100">
    <div class="container">
        <div class="row flex-wrap-reverse gy-4">
            <div class="col-lg-6">
                <div class="about-thumb">


                        <img class="img-1" src="{{getImage(getFilePath('call_to_action').'/'.@$about->data_values->call_to_action_1)}}" alt="@lang('image')">

                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-right-content">
                    <div class="section-heading mb-0">
                        <span class="subtitle">@lang((@$about->data_values->top_heading))</span>
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
