@extends('admin.components.form')
@section('form_action', route('contacts.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <div class="content-wrapper">
        <div class="container p-3">

            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    <div class="card-title">
                        <h3 class="card-label">@lang('general.add_new')</h3>
                    </div>
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
                                            value="{{ old($locale . '.title') }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1">{{ __('general.type') }}</label>
                                        <select class="form-select form-select-lg" name="" id="">
                                            <option selected>Select one</option>
                                            <option value="social">social</option>
                                            <option value="whatsapp">whatsapp</option>
                                            <option value="phone">phone</option>
                                            <option value="email">email</option>
                                        </select>
                                    </div>
                                    <input type="text" name="type" value="{{ old('type') }}" class="form-control"
                                        id="exampleInputName" placeholder="@lang('general.type')">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('general.contact') }}</label>
                                    <input type="text" name="contact" value="{{ old('contact') }}" class="form-control"
                                        id="exampleInputName" placeholder="@lang('general.contact')">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            @include('admin.components.icon', [
                                'label' => 'icon',
                                'required' => true,
                                'value' => 'value',
                            ])

                        </div>
                    </div>
                    <div class="card-footer mb-5">
                        <button type="submit"
                            class="btn btn-outline-primary px-5
                          ">@lang('general.save')</button>
                        <a href="{{ route('contacts.index') }}"
                            class="btn btn-outline-danger px-5
                            ">@lang('general.cancel')</a>
                    </div>
                </div>
            </div>
        </div>


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

    @endsection