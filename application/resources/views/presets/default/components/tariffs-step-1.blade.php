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
                        <input name="zip-code" id="zip-code" type="text" class="form--control"
                               value="{{ old('zip-code', $oldData['zip-code'] ?? '') }}" autocomplete="off" required>

                        <ul id="zip-suggestions" class="autocomplete-suggestions" style="display: none"></ul>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70px" height="70px" viewBox="0 0 120 120" version="1.1"><script xmlns="" id="eppiocemhmnlbhjplcgkofciiegomcon"/><script xmlns=""/><script xmlns=""/>
                                        <title>piktogramm/smart-meter</title>
                                        <g id="piktogramm/smart-meter" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Group-2" transform="translate(26.000000, 10.000000)">
                                                <path d="M44.6764005,64.2705185 C44.6764005,65.0363389 19.1851452,99.6170898 18.5196737,100 C18.5196737,100 0.557224825,90.8022333 0.488565067,90.7705441 C0.208644518,90.6385062 -0.00261627415,90.3902747 0,89.9334233 L0.110936402,30.4740733 C0.113577161,29.708253 0.652292181,28.7628609 1.31512292,28.37731 L43.4378841,3.8367282 C44.1007148,3.45117726 44.6764005,3.76278692 44.6764005,4.5286073 L44.6764005,64.2705185 L44.6764005,64.2705185 Z" id="Path" fill="#DDDDDD" fill-rule="nonzero"/>
                                                <path d="M19.6789673,38.0213651 L1.27815228,28.3720284 C1.27815228,28.3720284 43.2424679,3.95292164 43.604252,3.74958312 C43.9660361,3.54624461 44.5205957,3.8103206 44.5205957,3.8103206 L62.137105,12.9050977 L19.6789673,38.0213651 Z" id="Path" fill="#FFFFFF" fill-rule="nonzero"/>
                                                <path d="M62.6335678,73.470926 C62.6335678,74.2367464 62.071086,75.1768569 61.4056145,75.5597671 L19.1957082,99.8336321 C18.5302367,100.216542 17.9835994,99.9022919 17.9835994,99.1338308 L18.0945113,39.6744808 C18.0971521,38.9086604 18.6385079,37.9632684 19.3013386,37.5777175 L61.410896,13.0371357 C62.0737267,12.6515848 62.6335678,12.9631944 62.6335678,13.7290148 L62.6335678,73.470926 Z" id="Path" fill="#C1C1C1" fill-rule="nonzero"/>
                                                <path d="M62.6335678,73.470926 C62.6335678,74.2367464 62.071086,75.1794977 61.4056145,75.5624079 L19.2670087,99.8336321 C18.6015372,100.216542 18.0047255,99.9022919 18.0047255,99.1364715 L18.0047255,57.1087777 C18.0047255,56.3429573 18.5909742,55.3975653 19.2538049,55.0120143 L61.3844884,30.4714326 C62.0473191,30.0858816 62.6309271,30.3974913 62.6309271,31.1633117 L62.6309271,73.470926 L62.6335678,73.470926 Z" id="Path" fill="#8F9799" fill-rule="nonzero"/>
                                                <polygon id="Path" fill="#DDDDDD" fill-rule="nonzero" points="11.6669017 80.3104942 25.4094163 87.9660571 25.6629292 87.8604267 25.6629292 53.2770351 11.6669017 45.4630265"/>
                                                <polygon id="Path" fill="#FFFFFF" fill-rule="nonzero" points="18.0126478 48.9382666 25.5124059 53.2981611 68.2795125 28.179253 68.6941118 27.9363031 68.4009874 27.7672944 61.1943537 23.5764085"/>
                                                <path d="M68.7073156,61.9572129 C68.7073156,62.5038502 68.3217646,63.1746032 67.8490686,63.4492422 L25.9322867,87.8789121 C25.4595907,88.1535511 25.1347772,87.9317273 25.1347772,87.38509 L25.1347772,53.9662734 C25.1347772,53.4196361 25.4595907,52.7488831 25.9322867,52.4716033 L67.8833985,27.849158 C68.3534538,27.5718782 68.7099564,27.793702 68.7099564,28.3403393 L68.7099564,61.9572129 L68.7073156,61.9572129 Z" id="Path" fill="#C1C1C1" fill-rule="nonzero"/>
                                                <path d="M33.8492849,73.9964373 C33.8492849,74.9048587 34.4909896,75.2719243 35.2726545,74.8124321 L59.5650048,60.5866585 C60.3493105,60.1271663 61.0491119,59.0074841 61.0491119,58.0990626 L61.0491119,40.4033306 C61.0491119,39.4949091 60.3493105,39.1278435 59.5650048,39.5873357 L35.3017028,53.8131093 C34.5173972,54.2726016 33.8466441,55.3922838 33.8466441,56.3007052 L33.8466441,73.9964373 L33.8492849,73.9964373 Z" id="Path" fill="#000000" fill-rule="nonzero"/>
                                                <polygon id="Path" fill="#8F9799" fill-rule="nonzero" points="36.2259688 70.8222439 58.672428 57.6369297 58.672428 46.8150956 36.2259688 59.997769"/>
                                                <g id="Group" transform="translate(1.119707, 0.000000)" fill="#683ee5">
                                                    <path d="M0,7.05317376 C0.749975812,6.27414959 1.43393263,5.41326186 2.26313124,4.73194581 C10.4442054,-1.98350662 22.8557769,-1.49232528 30.4796508,5.83050193 C30.8546387,6.19228603 31.1451223,6.64385598 31.4752173,7.05317376 C31.4752173,7.33309431 31.4752173,7.61301486 31.4752173,7.89293541 C30.6328149,9.42193539 29.5897147,9.58038099 28.3089461,8.37883523 C21.1366422,1.66074204 10.2276631,1.65546052 3.16627112,8.36827219 C1.89078409,9.58038099 0.852965448,9.42457615 0.0026407599,7.89293541 C0,7.61301486 0,7.33309431 0,7.05317376 Z" id="Path"/>
                                                    <path d="M15.3850672,6.52766254 C19.8004177,6.60160382 23.3047061,7.99064353 26.2174643,10.8083343 C27.2394384,11.7959785 26.9119842,13.3144155 25.6206526,13.705248 C24.9155697,13.9191495 24.3478063,13.6577143 23.8487027,13.1744552 C22.3962847,11.7695709 20.7009169,10.7740045 18.741473,10.2854639 C14.529461,9.23444144 10.800708,10.2088818 7.63971839,13.1691737 C6.45929872,14.2756521 4.94350253,13.6761996 4.67150427,12.4561685 C4.52362171,11.8012601 4.76657162,11.2731081 5.23134536,10.8215381 C7.44430216,8.6640373 10.0771398,7.30932747 13.1192952,6.77853473 C13.9854644,6.62801142 14.8727598,6.5831185 15.3850672,6.52766254 Z" id="Path"/>
                                                    <path d="M15.3929895,12.9552501 C18.0627977,13.0160096 20.0222416,13.8003153 21.6568719,15.3636452 C22.41477,16.0872134 22.4755075,17.0827799 21.8285213,17.7905035 C21.1788944,18.5035087 20.1674834,18.5668869 19.4095853,17.8248334 C17.323385,15.7808852 14.011872,15.8759526 12.0497874,17.8221926 C11.3156562,18.5536831 10.2751968,18.4876641 9.62556984,17.7799405 C9.00763202,17.1039059 9.06044722,16.113621 9.75496707,15.4006158 C11.2232296,13.8927419 13.5603021,12.9499906 15.3929895,12.9552501 Z" id="Path"/>
                                                    <path d="M15.7468513,19.3115812 C17.0012122,19.3221443 17.9466043,20.2754586 17.9466043,21.5324603 C17.9466043,22.8185104 16.9721639,23.7744655 15.6808323,23.7533394 C14.4370344,23.7322133 13.4916423,22.7551321 13.5074869,21.5034119 C13.5259722,20.2569733 14.5004126,19.3010182 15.7468513,19.3115812 Z" id="Path"/>
                                                </g>
                                            </g>
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
<script src="{{asset('assets/common/js/jquery-3.7.1.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#zip-code').on('input', function () {
            const query = $(this).val();

            if (query.length >= 1) {
                $.ajax({
                    url: '/zip-codes',
                    method: 'GET',
                    data: { search: query },
                    success: function (data) {
                        let suggestions = '';
                        if (data.length > 0) {
                            data.forEach(item => {
                                suggestions += `
                                <li data-zip="${item.zip_code}" data-street="${item.city}">
                                    <div class="zip-street">
                                        <span class="zip">${item.zip_code}</span>,
                                        <span class="street">${item.city}</span>
                                    </div>
                                </li>`;
                            });
                        } else {
                            suggestions = '<li>No suggestions found</li>';
                        }
                        $('#zip-suggestions').html(suggestions).show();
                    },
                });
            } else {
                $('#zip-suggestions').hide();
            }
        });

        $('#zip-code').on('click', function () {
            if ($('#zip-code').val().trim() !== '') {
                $('#zip-suggestions').css('display', 'block');
            }
        });
        $(document).on('click', '#zip-suggestions li', function () {
            const selectedZip = $(this).data('zip');
            const selectedStreet = $(this).data('street');
            $('#zip-code').val(`${selectedZip}, ${selectedStreet}`);
            $('#zip-suggestions').hide();
        });

        $(document).on('click', function (e) {
            if (!$(e.target).closest('.form-group.zip').length) {
                $('#zip-suggestions').hide();
            }
        });
    });
</script>
