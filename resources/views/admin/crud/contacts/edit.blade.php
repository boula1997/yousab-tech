@extends('admin.components.form')
@section('form_action', route('contacts.update', $contact->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')

        <div class="container p-3">

            [ <div class="card card-custom mb-2">
                <div class="card-header card-header-tabs-line">
                    <div class="card-title">
                        <h3 class="card-label">@lang('general.add_new')</h3>
                    </div>
                </div>

            </div>
            <div class="card card-custom">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1">{{ __('general.type') }}</label>
                                            <select class="form-select form-select-lg" name="type" id="">
                                                <option {{ $contact->type = '' ? 'selected' : '' }} value="">
                                                    {{ __('general.selectOne') }}</option>
                                                <option {{ $contact->type = 'social' ? 'selected' : '' }} value="social">
                                                    {{ __('general.social') }}</option>
                                                <option {{ $contact->type = 'whatsapp' ? 'selected' : '' }} value="whatsapp">
                                                    {{ __('general.whatsapp') }}</option>
                                                <option {{ $contact->type = 'phone' ? 'selected' : '' }} value="phone">
                                                    {{ __('general.phone') }}</option>
                                                <option {{ $contact->type = 'email' ? 'selected' : '' }} value="email">
                                                    {{ __('general.email') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{ __('general.contact') }}</label>
                                    <input type="text" name="contact" value="{{ old('contact',$contact->contact) }}" class="form-control"
                                        id="exampleInputName" placeholder="@lang('general.contact')">
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            @include('admin.components.icon', [
                                'label' => 'icon',
                                'required' => true,
                                'value' => '{{ $contact->icon }}',
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
