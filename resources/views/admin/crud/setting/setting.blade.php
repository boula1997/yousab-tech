@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains b;og content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content pt-2">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-light">
                            <div class="card-header">
                                <h3 class="card-title">Settings</h3>
                                <ol class="breadcrumb float-sm-right bg-light p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Settings</a></li>
                                    <li class="breadcrumb-item active">@lang('general.edit')</li>
                                </ol>
                            </div>
                            <!-- /.card-header -->

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

                            <!-- form start -->
                            <form action="{{route('setting')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.address')}}</label>
                                        <input type="text" name="address" value="{{ old('address', $setting->address) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.address')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.map')}}</label>
                                        <input type="text" name="map" value="{{ old('map', $setting->map) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.map')}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.facebook')}}</label>
                                        <input type="text" name="facebook" value="{{ old('facebook', $setting->facebook) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.facebook')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.twitter')}}</label>
                                        <input type="text" name="twitter" value="{{ old('twitter', $setting->twitter) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.twitter')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.youtube')}}</label>
                                        <input type="text" name="youtube" value="{{ old('youtube', $setting->youtube) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.youtube')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.tiktok')}}</label>
                                        <input type="text" name="tiktok" value="{{ old('tiktok', $setting->tiktok) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.tiktok')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.instgram')}}</label>
                                        <input type="text" name="instgram" value="{{ old('instgram', $setting->instgram) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.instgram')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.phone1')}}</label>
                                        <input type="text" name="phone1" value="{{ old('phone1', $setting->phone1) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.phone1')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.phone2')}}</label>
                                        <input type="text" name="phone2" value="{{ old('phone2', $setting->phone2) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.phone2')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.phone3')}}</label>
                                        <input type="text" name="phone3" value="{{ old('phone3', $setting->phone3) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.phone3')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.email1')}}</label>
                                        <input type="text" name="email1" value="{{ old('email1', $setting->email1) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.email1')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.email2')}}</label>
                                        <input type="text" name="email2" value="{{ old('email2', $setting->email2) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.email2')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.appointment1')}}</label>
                                        <input type="text" name="appointment1" value="{{ old('appointment1', $setting->appointment1) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.appointment1')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.appointment2')}}</label>
                                        <input type="text" name="appointment2" value="{{ old('appointment2', $setting->appointment2) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.appointment2')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">{{__('general.meta_data')}}</label>
                                        <input type="text" name="meta_data" value="{{ old('meta_data', $setting->meta_data) }}"
                                            class="form-control" id="exampleInputName" placeholder="{{__('general.meta_data')}}">
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-30">
                                                <label for="exampleInputFile1">{{__('general.logo')}}</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="logo" class="custom-file-input"
                                                            id="exampleInputFile1">
                                                        <label class="custom-file-label" for="exampleInputFile1">{{__('general.choose_file')}}</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">@lang('general.upload_file')</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-center">
                                                <label for="exampleInputFile1">{{__('general.logo')}}</label>

                                                <img width="200" height="200" src="{{ 
                                                $setting->logo }}"
                                                    alt="">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-30">
                                                <label for="exampleInputFile1">{{__('general.tab')}}</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="tab" class="custom-file-input"
                                                            id="exampleInputFile1">
                                                        <label class="custom-file-label" for="exampleInputFile1">{{__('general.choose_file')}}</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">@lang('general.upload_file')</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-center">
                                                <label for="exampleInputFile1">{{__('general.tab')}}</label>

                                                <img width="200" height="200" src="{{ $setting->tab }}"
                                                    alt="">

                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> --}}
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-outline-primary px-5">@lang('general.save')</button>
                                    <a href="{{ route('setting') }}" class="btn btn-outline-danger px-5
                                    ">@lang('general.cancel')</a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->


                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
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
