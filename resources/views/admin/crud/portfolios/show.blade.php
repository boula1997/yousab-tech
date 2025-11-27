@extends('admin.layouts.master')

@section('content')
    <div class="page-body">

        <!-- New portfolio Add Start -->
        <div class="container-fluid">



            <div class="row theme-form ">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>{{ __('general.show') }} {{ __('general.portfolios') }}</h5>
                                    </div>
                                    <ul class="nav nav-pills mb-3 d-flex" id="pills-tab" role="tablist">
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link @if ($key == 0) active @endif"
                                                    id="pills-{{ $locale }}-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-{{ $locale }}"
                                                    type="button">@lang('general.' . $locale)</button>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        @foreach (config('translatable.locales') as $key => $locale)
                                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                                id="pills-{{ $locale }}" role="tabpanel">
                                                <!-- normal input -->
                                                <div class="mb-4 row align-items-center">
                                                    <div class="col-sm-6"> <label
                                                            class="form-label-title mb-0">{{ __('general.title') }}</label>
                                                        <p class="bg-show p-2 mt-2" id="ptitle" ptitle="{{$portfolio->translate($locale)->title}}">{{ $portfolio->translate($locale)->title }}</p>
                                                    </div>
                                                </div>

                                                <!-- normal input -->
                                                <div class="mb-4 row align-items-center">
                                                    <div class="col-sm-6"> <label
                                                            class="form-label-title mb-0">{{ __('general.subtitle') }}</label>
                                                        <p class="bg-show p-2 mt-2">{{ $portfolio->translate($locale)->subtitle }}</p>
                                                    </div>
                                                </div>

                                                <!-- normal input -->
                                                <div class="mb-4 row align-items-center">
                                                    <div class="col-sm-6"> <label
                                                            class="form-label-title mb-0">{{ __('general.description') }}</label>
                                                        <p class="bg-show p-2 mt-2">{!! $portfolio->translate($locale)->description !!}</p>
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- normal input -->
                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-6"> <label
                                                class="form-label-title mb-0">{{ __('general.image') }}</label> <img
                                                class="bg-show p-2 mt-2" width="300" height="300"
                                                src="{{ $portfolio->image }}" alt=""> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New portfolio Add End -->
    </div>
@endsection


@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(function() {

    // Read ?src=value from URL
    const urlParams = new URLSearchParams(window.location.search);
    const srcValue = urlParams.get("src") || "";

    // Read portfolio title from the <p> tag
    const portfolioTitle = $("#ptitle").attr("ptitle");

    // Build action text
    const action = encodeURIComponent(`View Portfolio ${portfolioTitle}`);

    const clientId = 52;

    // Add ?src=VALUE if exists
    const srcQuery = srcValue ? `?src=${encodeURIComponent(srcValue)}` : "";

    // Full API request
    const url = `https://yousab-tech.com/workspace/public/api/clienttrack/${clientId}/${action}${srcQuery}`;

    // Send request
    $.ajax({
        url: url,
        method: 'GET',
        headers: { 'locale': 'en' },
        success: function(res) {
            console.log("Tracking success:", res.data);
        },
        error: function(xhr, status, err) {
            console.error("Tracking error:", err);
        }
    });

});
</script>

@endpush

