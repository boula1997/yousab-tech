@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'projects', 'action' => 'show'])
                </div>

                <div class="card-body">
                    <div class="row">

                        <!-- normal input -->
                        <div class="col-md-6">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{ __('general.title') }}:</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">{{ $project->title }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- checkbox input -->
                        <div class="col-md-6">
                            <div class="mb-5 bg-light p-3 rounded h-100">
                                <div class="card-title fw-bold">
                                    <h5 class="font-weight-bolder text-dark">{{ __('general.status') }}:</h5>
                                    <p style="margin: 0; color: inherit; font-weight: normal;">
                                        {{ $project->status ? _('general.yes') : __('general.no') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
