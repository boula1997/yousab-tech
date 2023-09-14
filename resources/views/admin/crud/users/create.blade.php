@extends('admin.components.form')
@section('form_action', route('users.store'))
@section('form_type', 'POST')
@section('fields_cont')
    <!-- Content Wrapper. Contains blog content -->
    <div class="content-wrapper">
        <!-- Content Header (blog header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create New User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">@lang('general.create')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">Create User</h3>
                            </div>
                            <!-- /.card-header -->
         
                            <!-- form start -->
                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" id="exampleInputName" placeholder="@lang('general.name')">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" id="exampleInputEmail" placeholder="@lang('general.email')">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input type="password" name="password" value="{{ old('password') }}"
                                            class="form-control" id="exampleInputPassword" placeholder="@lang('general.password')">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Confirm Password</label>
                                        <input type="password" name="confirm-password" value="{{ old('confirm-password') }}"
                                            class="form-control" id="exampleInputConfirmpassword"
                                            placeholder="@lang('general.confirm_password')">
                                    </div>


                                    <div class="form-group">
                                        @include('admin.components.image', [
                                            'label' => __('words.image'),
                                            'value' => old('image'),
                                            'name' => 'image',
                                            'id' => 'kt_image_3',
                                            'accept' => 'image/*',
                                            'required' => true,
                                        ])
                
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-outline-primary px-5">@lang('general.save')</button>
                                        <a href="{{ route('users.index') }}" class="btn btn-outline-danger px-5
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
