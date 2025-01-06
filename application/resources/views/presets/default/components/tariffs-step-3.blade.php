@extends($activeTemplate . 'layouts.layout-wizard-2')

@section('content')
    <div class="container-body" style="height: 100vh;">
        <div class="container">
            <h3>Über dich</h3>
            <form method="POST" action="{{route('tariffs.processStep3')}}" class="step4-from">
                @csrf
                <div class="card-step3">
                    <div class="col-sm-12">
                        <label class="form-label">@lang('E-mail')</label>
                        <input name="email" id="email" type="text" class="form--control"
                               value="{{ old('email', $oldData['email'] ?? '') }}"
                               required>
                    </div>
                </div>

                <!--- Personal Data --->
                <div class="card-step3">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label">@lang('Name')</label>
                            <input name="name" id="name" type="text" class="form--control"
                                   value="{{ old('name', $oldData['name'] ?? '') }}"
                                   required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">@lang('Surname')</label>
                            <input name="surname" id="surname" type="text" class="form--control"
                                   value="{{ old('surname', $oldData['surname'] ?? '') }}"
                                   required>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <label class="form-label">@lang('Birthday')</label>
                        <input name="birthday" id="birthday" type="date" class="form--control"
                               value="{{ old('birthday', $oldData['birthday'] ?? '') }}"
                               required>
                    </div>

                    <div class="col-sm-12">
                        <label class="form-label">@lang('Telephone number')</label>
                        <input name="telephone" id="telephone" type="text" class="form--control"
                               value="{{ old('telephone', $oldData['telephone'] ?? '') }}"
                               required>
                    </div>
                </div>


                <!-- Address --->
                <div class="card-step3">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="form-label">@lang('PLZ')</label>
                            <input name="zip-code" id="zip-code" type="text" class="form--control"
                                   value="{{ old('zip-code', $step1Data['zip_code'] ?? '') }}" disabled
                                   required>
                        </div>
                        <div class="col-sm-8">
                            <label class="form-label">@lang('Location')</label>
                            <input name="location" id="location" type="text" class="form--control"
                                   value="{{ old('location', $zipCodeDetails->city ?? '') }}"
                                   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label class="form-label">@lang('Street')</label>
                            <input name="street" id="street" type="text" class="form--control" autocomplete="off"
                                   value="{{ old('street', $address->street_name ?? '') }}"
                                   required>
                            <ul id="street-suggestions" class="autocomplete-suggestions" style="display: none"></ul>

                        </div>
                        <div class="col-sm-4">
                            <label class="form-label">@lang('House number')</label>
                            <input name="house-number" id="house-number" type="text" class="form--control"
                                   value="{{ old('house-number', $oldData['house-number'] ?? '') }}"
                                   required>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn--base me-2 mb-2 next-step3">@lang('Submit')</button>
            </form>
        </div>
    </div>

@endsection

<script src="{{asset('assets/common/js/jquery-3.7.1.min.js')}}"></script>
<script>
    const zipCodeId = {{ $zipCodeDetails->id ?? 0}}

    $(document).ready(function () {
        $('#street').on('input', function () {
            const query = $(this).val();
            console.log(zipCodeId);
            if (query.length >= 1) {
                $.ajax({
                    url: "/"+zipCodeId + '/street',
                    method: 'GET',
                    data: { search: query },
                    success: function (data) {
                        console.log(data);
                        let suggestions = '';
                        if (data.length > 0) {
                            data.forEach(item => {
                                suggestions += `
                                <li data-street="${item}">
                                    <div class="zip-street">
                                        <span class="zip">${item}</span>
                                    </div>
                                </li>`;
                            });
                        } else {
                            suggestions = '<li>No suggestions found</li>';
                        }
                        $('#street-suggestions').html(suggestions).show();
                    },
                });
            } else {
                $('#street-suggestions').hide();
            }
        });

        $('#street').on('click', function () {
            if ($('#street').val().trim() !== '') {
                console.log("street not empty")
                $('#street-suggestions').css('display', 'block');

            }
        });
        $(document).on('click', '#street-suggestions li', function () {
            const selectedStreet = $(this).data('street');
            $('#street').val(`${selectedStreet}`);
            $('#street-suggestions').hide();
        });

        $(document).on('click', function (e) {
            if (!$(e.target).closest('.form-group.street').length) {
                $('#street-suggestions').hide();
            }
        });
    });
</script>
