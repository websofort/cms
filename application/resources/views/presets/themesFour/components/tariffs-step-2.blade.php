@extends($activeTemplate . 'layouts.layout-wizard-2')

@section('content')
    <div class="container-body">
        <div class="container">
            <form method="POST" action="{{route('tariffs.processStep2')}}">
                @csrf

                <h1>@lang('Our offer for you')</h1>

                <div class="content">
                    <div class="main-offer">
                        <div class="saving-details">
                            <div class="saving-header-wrapper">
                                <div class="saving-header">
                                    <h2>@lang('Smart tariff')</h2>
                                </div>
                                <div class="price-month">
                                    <p class="price" style="font-weight: bold;">42,20 €</p>
                                    <p class="month" style="font-weight: normal;">
                                        @lang('per month (dynamic)')
                                    </p>
                                </div>
                            </div>
                            <div class="savings">
                                <p style="font-weight: bold;font-size: 18px"> @lang('Annual savings approx.')</p>
                                <div class="saving-detail">
                                    <p style="font-size: 26px">
                                        <i class="fa-solid fa-coins"></i>
                                        <strong>159,12 €</strong>
                                    </p>
                                    <p style="font-size: 26px">
                                        <i class="fa-solid fa-leaf"></i>
                                        <span>509 kg CO2</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <ul class="details">
                            <li>
                                <i class="fa-solid fa-check check-details"></i>@lang('Green electricity at purchase price')
                            </li>
                            <li>
                                <i class="fa-solid fa-check check-details"></i>@lang('Save 40% on electricity costs on average')
                            </li>
                            <li>
                                <i class="fa-solid fa-check check-details"></i>@lang('Monthly cancellation & risk-free switching service')
                            </li>
                            <li><i class="fa-solid fa-check check-details"></i>@lang('Smart - quarter-hourly billing')
                            </li>
                        </ul>
                    </div>
                    <div class="pricing">
                        <p class="pricing-heading">@lang('Price composition')</p>
                        <div class="pricing-items">
                            <div class="price-item">
<span class="tooltip-container">
    @lang('Dynamic gross labor price')
    <i class="fa-solid fa-circle-info"></i>
    <div class="tooltip-text">
        @lang('Your price per kWh consumed. This is composed of the stock market electricity price, taxes, and fees, and is passed on to you by us without a markup.') <br>

    </div>
</span>
                                <p>26,95 ct/kWh</p>
                            </div>
                            <div class="price-item">
                        <span class="tooltip-container">
    @lang('Base price') <i class="fa-solid fa-circle-info"></i>
    <div class="tooltip-text">
        @lang('Your basic price per month. This is composed of network and metering point fees, as well as our service fee (€4.99/month).') <br>
    </div>
</span>

                                <p>9,23 €/ @lang('Month')</p>
                            </div>
                            <div class="price-item">
                           <span class="tooltip-container">
    @lang('RABOT Savings Commission') <i class="fa-solid fa-circle-info"></i>
    <div class="tooltip-text">
        @lang('Our participation is based on savings compared to the local default supplier.We receive 20% of the savings compared to the reference tariff of the basic supply.')
    </div>
</span>
                                <p>20% der @lang('savings')</p>
                            </div>
                        </div>

                        <div class="link-popup">
                            <p>@lang('Savings & Costs in Detail')</p>
                        </div>

                        {{--   @if(old('electric-car', $step1Data['electric-car'] ?? false))

                               <div class="row" style="margin-top: 15px; margin-bottom: 30px;">
                                   <div class="col border-top" ></div>
                               </div>

                               <p class="pricing-heading">Zusätzliches Einsparpotenzial für Elektrofahrer</p>

                               <div class="pricing-items">
                                   <div class="price-item">
                                       <span>Ladeoptimierung <i class="fa-solid fa-circle-info"></i></span>
                                       <p class="electric-drivers">bis zu 400,00 €/Jahr</p>
                                   </div>
                               </div>
                           @endif

                           @if(old('electric-car', $step1Data['electric-car'] ?? false) && !old('electric-car', $step1Data['smart-meter'] ?? false)  )
                               <div class="card">
                                   <div class="card-header">
                                       <h3>
                                           + Smart Meter beantragen <span>(optional)</span>
                                       </h3>
                                       <div class="icon {{ old('smart-meter', $oldData['smart-meter'] ?? false) ? 'checked' : '' }}" id="toggle-icon">+</div>
                                   </div>
                                   <div class="card-body">
                                       <div class="fee">Installationsgebühr <span style="float: right;">30€ einmalig<sup>4</sup></span></div>
                                       <p>
                                           Mit Smart Meter monatsgenaue Abrechnungen automatisch erhalten.
                                           Wir helfen dir bei der Beantragung und übernehmen den Papierkram.
                                       </p>
                                   </div>
                                   <div class="card-footer">
                                       <a href="#">Vorteile und Konditionen</a>
                                   </div>
                                   <input type="hidden" name="smart-meter" id="smart-meter-step2" value="{{ old('smart-meter', $oldData['smart-meter'] ?? '') }}">
                               </div>
                           @endif
                      --}} </div>
                </div>
                <div class="cta">
                    <button type="submit" class="btn btn--base me-2 mb-2">Jetzt loslegen</button>
                    <a class="back-link" href="{{route('tariffs.steps', ['step' => 1]) }}">Zurück</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        const icon = document.getElementById('toggle-icon');
        const input = document.getElementById('smart-meter-step2');

        icon.addEventListener('click', () => {
            if (icon.classList.contains('active')) {
                input.value = '';
                icon.textContent = '+';
                icon.classList.remove('active');
            } else {

                input.value = 'on';
                icon.textContent = '-';
                icon.classList.add('active');
            }
        });
    </script>
@endsection
