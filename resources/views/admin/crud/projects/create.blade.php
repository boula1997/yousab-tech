@extends('admin.components.form')
@section('form_action', route('projects.store'))
@section('form_type', 'POST')
@section('fields_content')
    @method('post')
    <div class="content-wrapper">
        <div class="container p-3">
            @include('admin.components.alert-error')
            <div class="card card-custom">
                <div class="card-header card-header-tabs-line">
                    @include('admin.components.breadcrumb', ['module' => 'projects', 'action' => 'create'])
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Normal title input -->
                        <div class="col-md-12">
                            <div class="form-group"> <label>{{ __('general.title') }} <span class="text-danger"> *
                                    </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text"><i
                                                class="fas fa-pen"></i></span> </div> <input type="text" name="title"
                                        placeholder="{{ __('general.title') }}"
                                        class="form-control pl-1 min-h-40px @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}">
                                </div>
                            </div>
                        </div>

                        {{-- Number Input --}} <div class="col-md-6">
                            <div class="form-group"> <label>{{ __('general.cost') }} <span class="text-danger"> *
                                    </span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"> <span class="input-group-text"><i
                                                class="fas fa-pen"></i></span> </div> <input type="text" name="cost"
                                        placeholder="{{ __('general.cost') }}"
                                        class="form-control min-h-40px @error('cost') is-invalid @enderror"
                                        value="{{ old('cost') }}">
                                </div>
                            </div>
                        </div>

                        {{-- Checkbox Input --}} <div class="col-md-6 ps-4">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="form-check form-switch"> <input class="form-check-input"
                                            @checked(old('status')) type="checkbox" id="status" name="status"
                                            value="1"> <label class="form-check-label"
                                            for="status">{{ __('general.status') }} <span class="text-danger"> *
                                            </span></label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mb-5">
                        <button type="submit"
                            class="btn btn-outline-primary px-5
                          ">@lang('general.save')</button>
                        <a href="{{ route('projects.index') }}"
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
