@extends('admin.components.form')
@section('form_action', route('portfolios.update', $portfolio->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
    
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
                                            value="{{ old($locale . '.title', $portfolio->translate($locale)->title) }}">
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
                                            value="{{ old($locale . '.subtitle', $portfolio->translate($locale)->subtitle) }}">
                                    </div>
                                </div>



                                <div class="col-form-group">
                                    <label>@lang('general.description')(@lang('general.' . $locale))<span class="text-danger">*</span></label>
                                    <textarea rows="100" class="summernote @error($locale . '.description') is-invalid @enderror"
                                        name="{{ $locale . '[description]' }}">
                                         {!! old($locale . '.description', $portfolio->translate($locale)->description) !!} 
                                     </textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card card-custom">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mt-30">
                                <label for="exampleInputFile1">{{ __('general.images') }}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="images[]" class="custom-file-input" multiple
                                            id="exampleInputFile1">
                                        <label class="custom-file-label" for="exampleInputFile1">{{ __('general.choose') }}
                                            {{ __('general.file') }}</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">@lang('general.upload_file')</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($images as $image)

                            <div class="col-md-3 mt-3">
                                <div
                                    class="custom-control custom-switch custom-switch-off-success custom-switch-on-danger">
                                    <input type="checkbox"  name="delimages[]"
                                        value="{{ $image->id }}" class="custom-control-input"
                                        id="customSwitch{{ $image->id  }}">
                                    <img width="100" height="100" src="{{ asset($image->url) }}" alt="" for="customSwitch{{ $image->id  }}">
                                    <label class="custom-control-label"
                                        for="customSwitch{{ $image->id  }}"></label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer mb-5">
                    <button type="submit" class="btn btn-outline-success">@lang('general.save')</button>
                    <a href="{{ route('portfolios.index') }}" class="btn btn-outline-danger font-weight-bold">@lang('general.cancel')</a>
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

<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@endpush
