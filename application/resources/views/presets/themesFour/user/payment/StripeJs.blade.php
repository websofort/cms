@extends($activeTemplate.'layouts.master')
@section('content')
<div class="body-wrapper">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="body-area">
                <h5>@lang('Stripe Storefront')</h5>
                <form action="{{$data->url}}" method="{{$data->method}}">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            @lang('You have to pay '):
                            <strong>{{showAmount($deposit->final_amo)}} {{__($deposit->method_currency)}}</strong>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            @lang('You will get '):
                            <strong>{{showAmount($deposit->amount)}}  {{__($general->cur_text)}}</strong>
                        </li>
                    </ul>
                     <script src="{{$data->src}}"
                        class="stripe-button"
                        @foreach($data->val as $key=> $value)
                        data-{{$key}}="{{$value}}"
                        @endforeach
                    >
                    </script>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        (function ($) {
            "use strict";
            $('button[type="submit"]').addClass("btn btn--base mt-3");
            $('button[type="submit"]').text("Pay Now");
        })(jQuery);
    </script>
@endpush
