@extends('admin.layouts.master')

@section('content')
    <div class="content-wrapper">
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
        <form action="{{ route('pages.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    <div class="card-title">
                        <h3 class="card-label">@lang('general.add_new')</h3>
                    </div>
                </div>
                <div class="card-toolbar">
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

                                <div class="form-group">
                                    <label>@lang('general.subtitle') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                        </div>
                                        <input type="text" name="{{ $locale . '[subtitle]' }}"
                                            placeholder="@lang('general.subtitle')"
                                            class="form-control  pl-5 min-h-40px @error($locale . '.subtitle') is-invalid @enderror"
                                            value="{{ old($locale . '.subtitle') }}">
                                    </div>
                                </div>



                                <div class="col-form-group">
                                    <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                    <textarea rows="100" class=" summernote @error($locale . '.description') is-invalid @enderror" 
                                        name="{{ $locale . '[description]' }}">
                                    {!! old($locale . '.description') !!} 
                                </textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label>@lang('pages.description') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('general.identifier') }}</label>
                                    <input type="text" name="identifier" value="{{ old('identifier') }}"
                                        class="form-control" id="exampleInputName" placeholder="@lang('general.identifier')">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label class="col-form-label d-block">@lang('general.image')</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="exampleInputFile1">
                                            <label class="custom-file-label"
                                                for="exampleInputFile1">@lang('general.choose_file')</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">@lang('general.upload_file')</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
                    <a href="{{ route('pages.index') }}"
                        class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
                </div>
            </div>
        </form>
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
