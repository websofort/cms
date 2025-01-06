@extends($activeTemplate . 'layouts.layout-wizard')

@section('content')
    <div class="container-body">
<div class="container">
    <h1></h1>

        <h1>@lang('Find the Perfect Energy Offer')</h1>

    <form method="POST" action="{{ route('tariffs.processStep1') }}">
        @csrf
            <div class="form-card">
            <div class="grid-container">
                <div class="form-group zip">
                    <div class="col-sm-12">
                        <label class="form-label">@lang('ZIP')</label>
                        <input name="zip-code"  id="zip-code" type="text" class="form--control"  value="{{ old('zip-code', $oldData['zip-code'] ?? '') }}"
                              required>
                    </div>
                </div>

                <div class="first-row">
                    <div class="form-group">
                        <label><i class="fa-solid fa-user " ></i> @lang('Household Size')</label>
                        <div class="counter">
                            <button id="decrease-btn" class="rounded-btn">−</button>
                            <div class="household-text">

                                <span id="household-size">{{ old('household-size', $oldData['household-size'] ?? 1) }}</span> @lang('People')
                                <input type="hidden" id="household-size-input" value="{{ old('household-size', $oldData['household-size'] ?? 1) }}" name="household-size">
                            </div>
                            <button id="increase-btn" class="rounded-btn">+</button>
                        </div>
                    </div>


                    <div class="col-sm-12" style="position: relative;">
                        <label class="form-label"><i class="fa-solid fa-bolt"></i> @lang('Annual Power Consumption')</label>
                        <input name="power-consumption" type="text" class="form--control" id="power-input"
                               value="{{ old('power-consumption', $oldData['power-consumption'] ?? 1350) }}" required>
                        <span class="suffix">@lang('kWh')</span>
                    </div>


                </div>


                <div class="form-group ">
                    <label>@lang('Do you use any of the following?')</label>
                    <div class="checkboxs">
                        <div class="checkbox-container  checked">
                            <div class="checkbox-inside">
                                <div class="details">
                                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
 width="70px" height="70px" viewBox="0 0 70 70"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M834 4869 c-47 -14 -101 -79 -109 -131 -3 -24 -5 -1020 -3 -2214 l3
-2170 25 -36 c13 -20 38 -44 55 -55 29 -17 98 -18 1745 -21 l1715 -2 45 22
c33 17 51 35 68 68 l22 44 0 2186 0 2186 -22 44 c-17 33 -35 51 -68 68 l-44
22 -1701 -1 c-985 0 -1713 -5 -1731 -10z m846 -1029 l0 -560 -341 0 c-329 0
-343 1 -379 21 -21 12 -47 38 -59 59 -21 37 -21 48 -21 480 0 431 1 443 21
480 12 20 38 47 58 58 35 21 48 22 379 22 l342 0 0 -560z m960 0 l0 -560 -400
0 -400 0 0 560 0 560 400 0 400 0 0 -560z m880 539 c21 -12 47 -38 59 -59 21
-37 21 -48 21 -480 0 -432 0 -443 -21 -480 -12 -21 -38 -47 -59 -59 -36 -20
-50 -21 -379 -21 l-341 0 0 560 0 560 341 0 c329 0 343 -1 379 -21z m-1015
-1933 c118 -35 222 -87 316 -158 114 -85 112 -80 48 -144 -29 -29 -57 -54 -62
-54 -5 0 -32 21 -60 46 -62 55 -225 136 -322 160 -101 25 -276 23 -380 -5
-107 -28 -226 -88 -306 -154 l-66 -55 -57 57 -57 58 56 52 c106 96 271 179
425 212 129 28 343 21 465 -15z m-103 -305 c92 -24 153 -54 237 -116 l63 -48
-60 -59 -59 -60 -54 41 c-171 130 -399 128 -581 -5 l-50 -37 -56 56 -56 56 20
22 c49 55 189 131 281 153 86 21 226 20 315 -3z m-22 -330 c25 -13 55 -33 68
-44 l22 -21 -56 -57 -56 -57 -36 21 c-49 29 -122 28 -163 -2 l-31 -23 -54 53
c-30 29 -54 59 -54 65 0 17 51 52 108 75 66 27 189 21 252 -10z m-859 -474
c106 -71 106 -203 0 -274 -97 -66 -241 15 -241 135 0 125 141 206 241 139z
m800 0 c106 -71 106 -203 0 -274 -97 -66 -241 15 -241 135 0 125 141 206 241
139z m800 0 c106 -71 106 -203 0 -274 -97 -66 -241 15 -241 135 0 125 141 206
241 139z m-1441 -617 l0 -80 -240 0 -240 0 0 80 0 80 240 0 240 0 0 -80z m800
0 l0 -80 -240 0 -240 0 0 80 0 80 240 0 240 0 0 -80z m800 0 l0 -80 -240 0
-240 0 0 80 0 80 240 0 240 0 0 -80z"/>
<path d="M1185 4136 c-60 -27 -106 -77 -130 -139 -24 -64 -18 -285 9 -337 47
-90 119 -134 216 -134 97 0 168 44 216 134 16 30 19 58 19 180 0 130 -2 149
-22 185 -63 117 -194 165 -308 111z m150 -161 c24 -23 25 -31 25 -135 0 -104
-1 -112 -25 -135 -15 -16 -36 -25 -55 -25 -19 0 -40 9 -55 25 -24 23 -25 31
-25 135 0 104 1 112 25 135 15 16 36 25 55 25 19 0 40 -9 55 -25z"/>
<path d="M2145 4136 c-60 -27 -106 -77 -130 -139 -24 -64 -18 -285 9 -337 47
-90 119 -134 216 -134 97 0 168 44 216 134 16 30 19 58 19 180 0 130 -2 149
-22 185 -63 117 -194 165 -308 111z m150 -161 c24 -23 25 -31 25 -135 0 -104
-1 -112 -25 -135 -15 -16 -36 -25 -55 -25 -19 0 -40 9 -55 25 -24 23 -25 31
-25 135 0 104 1 112 25 135 15 16 36 25 55 25 19 0 40 -9 55 -25z"/>
<path d="M3105 4136 c-60 -27 -106 -77 -130 -139 -24 -64 -18 -285 9 -337 47
-90 119 -134 216 -134 97 0 168 44 216 134 16 30 19 58 19 180 0 130 -2 149
-22 185 -63 117 -194 165 -308 111z m150 -161 c24 -23 25 -31 25 -135 0 -104
-1 -112 -25 -135 -15 -16 -36 -25 -55 -25 -19 0 -40 9 -55 25 -24 23 -25 31
-25 135 0 104 1 112 25 135 15 16 36 25 55 25 19 0 40 -9 55 -25z"/>
</g>
</svg>
                                    <label for="smart-meter" class="custom-checkbox">@lang('Smart meter')
                                    </label>
                                </div>
                                <input type="checkbox" id="smart-meter" name="smart-meter"
                                   checked>

                            </div>
                        </div>
                    </div>
                </div>




            </div>
            </div>

            <div class="cta">
                <button class=" btn btn--base me-2 mb-2 submit-btn">@lang('Calculate Price')</button>

            </div>
        </form>

</div>
    </div>
@endsection
