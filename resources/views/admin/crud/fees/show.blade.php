@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'fees', 'action' => 'show'])
                </div>

                <div class="card-body">
                    <div class="row">
                        <!-- normal input -->
                        <div class="col-md-6">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{ __('general.amount') }}:</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ $fee->amount }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- select input show -->
                        <div class="col-md-6">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{ __('general.project') }}:</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ $fee->project->name }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- normal input -->
                        <div class="col-md-6">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{ __('general.rest') }}:</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ $fee->rest }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
