@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-3">
            <div class="card card-custom card-stretch gutter-b">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'teams', 'action' => 'show'])
                </div>
                <div class="card-toolbar px-3">
                    <ul class="nav nav-tabs nav-bold nav-tabs-line">
                        @foreach (config('translatable.locales') as $key => $locale)
                            <li class="nav-item">
                                <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                    href="{{ '#' . $locale }}">@lang('general.' . $locale)</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body p-10">
                    <div class="tab-content">
                        @foreach (config('translatable.locales') as $key => $locale)
                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                id="{{ $locale }}" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-7 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">@lang('general.title'):</h5>
                                                <p class="m-0">{{ $team->translate($locale)->title }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-7 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">@lang('general.subtitle'):</h5>
                                                <p class="m-0">{{ $team->translate($locale)->subtitle }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-7 bg-light p-3 rounded h-100">
                                            <div class="card-title fw-bold">
                                                <h5 class="font-weight-bolder text-dark">@lang('general.description'):</h5>
                                                <p class="m-0">{!! $team->translate($locale)->description !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="card card-custom">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-7 bg-light p-3 rounded h-100">
                                        <div class="card-title fw-bold">
                                            <h5 class="font-weight-bolder text-dark">@lang('general.facebook'):</h5>
                                            <p class="m-0">{{ $team->facebook }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-7 bg-light p-3 rounded h-100">
                                        <div class="card-title fw-bold">
                                            <h5 class="font-weight-bolder text-dark">@lang('general.twitter'):</h5>
                                            <p class="m-0">{{ $team->twitter }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-7 bg-light p-3 rounded h-100">
                                        <div class="card-title fw-bold">
                                            <h5 class="font-weight-bolder text-dark">@lang('general.instagram'):</h5>
                                            <p class="m-0">{{ $team->instagram }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-7 bg-light p-3 rounded h-100">
                                        <div class="card-title fw-bold">
                                            <h5 class="font-weight-bolder text-dark">@lang('general.linkedin'):</h5>
                                            <p class="m-0">{{ $team->linkedin }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        @if ($team->file !== null)
                                        <label class="col-form-label d-block">@lang('general.image')</label>
                                        <br>
                                        <img src="{{ asset($team->image) }}" class="w-50">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection