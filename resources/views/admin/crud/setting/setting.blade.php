@extends('admin.components.form')
@section('form_action', route('setting', $setting))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
        @csrf
        <div class="container p-5">
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    {{-- <div class="card-title">
                            <h3 class="card-label">@lang('general.add_new')</h3>
                        </div> --}}
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
                <div class="card-body">
                    <div class="tab-content">
                        {{-- validation messages start --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>@lang('general.errors')</strong>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- validation messages end --}}
                        @foreach (config('translatable.locales') as $key => $locale)
                            <div class="tab-pane fade show @if ($key == 0) active @endif"
                                id="{{ $locale }}" role="tabpanel">
                                <div class="form-group">
                                    <label>@lang('general.title') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[title]' }}"
                                            placeholder="@lang('general.title')"
                                            class="form-control  pl-5 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                            value="{{ old($locale . '.title', $setting->translate($locale)->title) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.address') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[address]' }}"
                                            placeholder="@lang('general.address')"
                                            class="form-control  pl-5 min-h-40px @error($locale . '.address') is-invalid @enderror"
                                            value="{{ old($locale . '.address', $setting->translate($locale)->address) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.appointment1') - @lang('general.' . $locale)<span class="text-danger"> *
                                        </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[appointment1]' }}"
                                            placeholder="@lang('general.appointment1')"
                                            class="form-control  pl-5 min-h-40px @error($locale . '.appointment1') is-invalid @enderror"
                                            value="{{ old($locale . '.appointment1', $setting->translate($locale)->appointment1) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.appointment2') - @lang('general.' . $locale)<span class="text-danger"> *
                                        </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[appointment2]' }}"
                                            placeholder="@lang('general.appointment2')"
                                            class="form-control  pl-5 min-h-40px @error($locale . '.appointment2') is-invalid @enderror"
                                            value="{{ old($locale . '.appointment2', $setting->translate($locale)->appointment2) }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>@lang('general.meta_data') - @lang('general.' . $locale)<span class="text-danger"> *
                                        </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[meta_data]' }}"
                                            placeholder="@lang('general.meta_data')"
                                            class="form-control  pl-5 min-h-40px @error($locale . '.meta_data') is-invalid @enderror"
                                            value="{{ old($locale . '.meta_data', $setting->translate($locale)->meta_data) }}">
                                    </div>
                                </div>



                                <div class="col-form-group">
                                    <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                    <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                        name="{{ $locale . '[description]' }}">
                                        {!! old($locale . '.description', $setting->translate($locale)->description) !!} 
                                    </textarea>
                                </div>
                                {{-- <div class="form-group">
                                        <label>@lang('settings.description') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                                        <textarea name="{{ $locale . '[description]' }}" @error($locale . '.description') is-invalid @enderror class="form-control kt-ckeditor-5">{{ old($locale . '.description') }}</textarea>
                                    </div> --}}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.map') }}</label>
                                        <input type="text" name="map" value="{{ old('map', $setting->map) }}"
                                            class="form-control" id="exampleInputName"
                                            placeholder="{{ __('general.map') }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.facebook') }}</label>
                                        <input type="text" name="facebook"
                                            value="{{ old('facebook', $setting->facebook) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.facebook') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.twitter') }}</label>
                                        <input type="text" name="twitter"
                                            value="{{ old('twitter', $setting->twitter) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.twitter') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.youtube') }}</label>
                                        <input type="text" name="youtube"
                                            value="{{ old('youtube', $setting->youtube) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.youtube') }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.tiktok') }}</label>
                                        <input type="text" name="tiktok"
                                            value="{{ old('tiktok', $setting->tiktok) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.tiktok') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.instgram') }}</label>
                                        <input type="text" name="instgram"
                                            value="{{ old('instgram', $setting->instgram) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.instgram') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.phone1') }}</label>
                                        <input type="text" name="phone1"
                                            value="{{ old('phone1', $setting->phone1) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.phone1') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.phone2') }}</label>
                                        <input type="text" name="phone2"
                                            value="{{ old('phone2', $setting->phone2) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.phone2') }}">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.phone3') }}</label>
                                        <input type="text" name="phone3"
                                            value="{{ old('phone3', $setting->phone3) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.phone3') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">{{ __('general.email1') }}</label>
                                        <input type="text" name="email1"
                                            value="{{ old('email1', $setting->email1) }}" class="form-control"
                                            id="exampleInputName" placeholder="{{ __('general.email1') }}">
                                    </div>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">{{ __('general.email2') }}</label>
                                    <input type="text" name="email2" value="{{ old('email2', $setting->email2) }}"
                                        class="form-control" id="exampleInputName"
                                        placeholder="{{ __('general.email2') }}">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.logo'),
                                'value' => old('image', $setting->logo),
                                'name' => 'image',
                                'id' => 'kt_image_2',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>
                        <div class="col-md-6">
                            @include('admin.components.image', [
                                'label' => __('general.tab'),
                                'value' => old('image', $setting->tab),
                                'name' => 'image',
                                'id' => 'kt_image_3',
                                'accept' => 'image/*',
                                'required' => true,
                            ])

                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary">@lang('general.save')</button>
                    <a href="{{ route('dashboard') }}"
                        class="btn btn-outline-danger font-weight-bold">@lang('general.cancel')</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            // Summernote
            $('.summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
