@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'contacts', 'action' => 'show'])
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">@lang('general.contact'):</h5>
                            <p class="m-0">{{ $contact->contact }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">@lang('general.type'):</h5>
                            <p class="m-0">{{ $contact->type }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-7 bg-light p-3 rounded h-100">
                        <div class="card-title">
                            <h5 class="font-weight-bolder text-dark">@lang('general.icon'):</h5>
                            <i class="{{ $contact->icon }}"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
