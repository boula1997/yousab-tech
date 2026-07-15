@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row theme-form">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">

                                    <div class="title-header option-title">
                                        <h5>{{ __('general.show') }} {{ __('general.contact') }}</h5>
                                    </div>

                                    <div class="tab-content" id="pills-tabContent">
                                     

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-12">
                                            <label class="form-label-title mb-0">
                                                {{ __('general.contact') }}
                                            </label>
                                            <p class="bg-show p-2 mt-2">
                                                {{ $contact->contact ?? '-' }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-12">
                                            <label class="form-label-title mb-0">{{ __('general.icon') }}</label>
                                            <p class="bg-show p-2 mt-2">
                                                <i class="{{ $contact->icon }}" style="font-size: 22px;"></i>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <div class="col-sm-12">
                                            <label class="form-label-title mb-0">{{ __('general.type') }}</label>
                                            <p class="bg-show p-2 mt-2">{{ $contact->type }}</p>
                                        </div>
                                    </div>

                                </div> 
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
