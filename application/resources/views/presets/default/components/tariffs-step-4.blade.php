@extends($activeTemplate . 'layouts.layout-wizard-2')

@section('content')
    <div class="container-body">
        <div class="container">
            <h3>Über dich</h3>
            <form method="POST" action="{{route('tariffs.processStep3')}}" class="step4-from">
                <div class="card-step3 step4">
                    <div class="section-header">Dein Wechselgrund</div>
                    <ul class="nav nav-tabs custom--tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active"
                                id="tab1-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#tab1"
                                type="button"
                                role="tab"
                                aria-controls="tab1"
                                aria-selected="true"
                            >
                                Anbieterwechsel
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="tab2-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#tab2"
                                type="button"
                                role="tab"
                                aria-controls="tab2"
                                aria-selected="false"
                            >
                                Umzug
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-step3 step4">
                    <div class="section-header">Dein Tarifstatus bei deinem Vorlieferanten</div>
                    <ul class="nav nav-tabs custom--tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active"
                                id="tab3-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#tab3"
                                type="button"
                                role="tab"
                                aria-controls="tab3"
                                aria-selected="true"
                            >
                                Ich habe bereits gekündig
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="tab4-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#tab4"
                                type="button"
                                role="tab"
                                aria-controls="tab4"
                                aria-selected="false"
                            >
                                Bitte kündigt für mich
                            </button>
                        </li>
                    </ul>
                    <div class="info">
                        Bitte beachten: Solltest du von einem Sonderkündigungsrecht Gebrauch machen wollen, musst du deinen Vertrag selbst kündigen.
                    </div>
                </div>
            </form>
    </div>
    </div>
@endsection
