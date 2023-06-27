@extends('admin.layouts.master')
 
@section('content')
    <div class="content-wrapper card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.add_new')</h3>
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
        </div>
        <div class="card-body">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                        role="tabpanel">
                        <div class="form-group">
                            <label>@lang('general.title') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[title]' }}" placeholder="@lang('general.title')"
                                    class="form-control  pl-5 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                    value="{{ old($locale . '.title') }}">
                            </div>
                        </div>
 
 
                        <div class="col form-group">
                            <label>@lang('general.fields.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                            <textarea class="form-control @error($locale . '.description') is-invalid @enderror " type="text"
                                name="{{ $locale . '[description]' }}" rows="4" cols="20" id="summernote">{{ old($locale . '.description') }} </textarea>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-custom">

        <div class="card-footer text-center">
            <button type="submit" class="btn btn-primary w-20">Submit</button>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
