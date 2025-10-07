@extends('admin.components.form')

@section('form_action', route('contacts.update', $contact->id))
@section('form_type', 'POST')

@section('fields_content')
@method('PUT')

<div class="page-body">
    <div class="container-fluid">
        <div class="row theme-form ">
            <div class="col-12">
                @include('admin.components.alert-error')

                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">

                                <div class="title-header option-title">
                                    <h5>{{ __('general.edit') }} {{ __('general.contact') }}</h5>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">
                                        {{ __('general.contact') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" 
                                               name="contact" 
                                               class="form-control @error('contact') is-invalid @enderror" 
                                               placeholder="{{ __('general.contact') }}" 
                                               value="{{ old('contact', $contact->contact) }}" 
                                               required>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">
                                        {{ __('general.type') }} <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-sm-9">
                                        <select class="js-example-basic-single w-100 @error('type') is-invalid @enderror"
                                                name="type"
                                                id="type"
                                                required>
                                            <option value="">{{ __('general.select') }}</option>
                                            <option value="social" {{ (old('type', $contact->type ?? '') == 'social') ? 'selected' : '' }}>
                                                {{ __('general.social') }}
                                            </option>
                                            <option value="whatsapp" {{ (old('type', $contact->type ?? '') == 'whatsapp') ? 'selected' : '' }}>
                                                {{ __('general.whatsapp') }}
                                            </option>
                                            <option value="phone" {{ (old('type', $contact->type ?? '') == 'phone') ? 'selected' : '' }}>
                                                {{ __('general.phone') }}
                                            </option>
                                            <option value="email" {{ (old('type', $contact->type ?? '') == 'email') ? 'selected' : '' }}>
                                                {{ __('general.email') }}
                                            </option>
                                        </select>
                                
                                        @error('type')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                

                                <div class="col-md-6">
                                    @include('admin.components.icon', [
                                        'label' => 'icon',
                                        'required' => true,
                                        'value' => old('icon', $contact->icon ?? 'fas fa-desktop')
                                    ]) 
                                </div>   

                            </div>

                            <div class="card-submit-button">
                                <button class="btn btn-animation ms-auto" type="submit">
                                    {{ __('general.update') }}
                                </button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
