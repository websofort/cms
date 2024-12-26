@php
$plan = getContent('understanding_pricing.content',true);
$plans = App\Models\Plan::where('status',1)->latest()->take(3)->get();
@endphp
<!-- ==================== Pricing Start Here ==================== -->
<section class="pricing-plan py-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-heading  text-center">
                    <h2 class="section-heading__title">{{__(@$plan->data_values->heading)}}</h2>
                    <p class="section-heading__desc">{{__(@$plan->data_values->sub_heading)}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Pricing End Here ==================== -->
