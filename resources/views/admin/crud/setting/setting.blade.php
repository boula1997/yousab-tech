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
                                    <li class="breadcrumb-item active">Edit</li>
                                </ol>
                            </div>
                            <!-- /.card-header -->

                            {{-- validation messages start --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>اخطاء!</strong>
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
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" name="address" value="{{ old('address', $setting->address) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Map</label>
                                        <input type="text" name="map" value="{{ old('map', $setting->map) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Facebook</label>
                                        <input type="text" name="facebook" value="{{ old('facebook', $setting->facebook) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Twitter</label>
                                        <input type="text" name="twitter" value="{{ old('twitter', $setting->twitter) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Youtube</label>
                                        <input type="text" name="youtube" value="{{ old('youtube', $setting->youtube) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiktok</label>
                                        <input type="text" name="tiktok" value="{{ old('tiktok', $setting->tiktok) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Instgram</label>
                                        <input type="text" name="instgram" value="{{ old('instgram', $setting->instgram) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone1</label>
                                        <input type="text" name="phone1" value="{{ old('phone1', $setting->phone1) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone2</label>
                                        <input type="text" name="phone2" value="{{ old('phone2', $setting->phone2) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone3</label>
                                        <input type="text" name="phone3" value="{{ old('phone3', $setting->phone3) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email1</label>
                                        <input type="text" name="email1" value="{{ old('email1', $setting->email1) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email2</label>
                                        <input type="text" name="email2" value="{{ old('email2', $setting->email2) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Appointment1</label>
                                        <input type="text" name="appointment1" value="{{ old('appointment1', $setting->appointment1) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Appointment2</label>
                                        <input type="text" name="appointment2" value="{{ old('appointment2', $setting->appointment2) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meta Data</label>
                                        <input type="text" name="meta_data" value="{{ old('meta_data', $setting->meta_data) }}"
                                            class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-30">
                                                <label for="exampleInputFile">Logo</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="logo" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-center">
                                                <label for="exampleInputFile">Logo</label>

                                                <img width="200" height="200" src="{{ 
                                                $setting->logo }}"
                                                    alt="">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mt-30">
                                                <label for="exampleInputFile">Tab</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" name="tab" class="custom-file-input"
                                                            id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                                            file</label>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-center">
                                                <label for="exampleInputFile">Tab</label>

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

                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-primary w-20">Submit</button>
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
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
