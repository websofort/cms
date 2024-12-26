@extends($activeTemplate . 'layouts.layout-wizard-2')

@section('content')
    <div class="container-body">
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
                                   value="{{ old('zip-code', $step1Data['zip-code'] ?? '') }}" disabled
                                   required>
                        </div>
                        <div class="col-sm-8">
                            <label class="form-label">@lang('Location')</label>
                            <input name="location" id="location" type="text" class="form--control"
                                   value="{{ old('location', $oldData['location'] ?? '') }}"
                                   required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <label class="form-label">@lang('Street')</label>
                            <input name="street" id="street" type="text" class="form--control"
                                   value="{{ old('street', $oldData['street'] ?? '') }}"
                                   required>
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
