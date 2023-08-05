@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains blog content -->
    <div class="content-wrapper">
        <!-- Content Header (blog header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@lang('general.create') @lang('general.new')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admins.index') }}">@lang('general.admins')</a></li>
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
                                <h3 class="card-title">@lang('general.create') @lang('general.admins')</h3>
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
                            <form action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">@lang('general.name')</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control" id="exampleInputName" placeholder="@lang('general.name')">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">@lang('general.email')</label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control" id="exampleInputEmail" placeholder="@lang('general.email')">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">@lang('general.password')</label>
                                        <input type="password" name="password" value="{{ old('password') }}"
                                            class="form-control" id="exampleInputPassword" placeholder="@lang('general.password')">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">@lang('general.confirm_password')</label>
                                        <input type="password" name="confirm-password" value="{{ old('confirm-password') }}"
                                            class="form-control" id="exampleInputConfirmpassword"
                                            placeholder="@lang('general.confirm_password')">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">@lang('general.role')</label>
                                        <select name="roles" id="" class="form-control">
                                            @foreach ($roles as $role)
                                                <option value="{{ $role }}">{{ $role }}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputFile1">@lang('general.image')</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="exampleInputFile1">
                                                <label class="custom-file-label" for="exampleInputFile1">@lang('general.choose_file')</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">@lang('general.upload_file')</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-outline-primary px-5">@lang('general.save')</button>
                                        <a href="{{ route('admins.index') }}" class="btn btn-outline-danger px-5
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
