@extends('admin.components.form')
@section('form_action', route('users.update', $user->id))
@section('form_type', 'POST')
@section('fields_content')
    <div class="content-wrapper">
        @method('PUT')
    
        <!-- Content Header (blog header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@lang('general.edit') User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                            <li class="breadcrumb-item active">@lang('general.edit')</li>
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
                                <h3 class="card-title">@lang('general.edit') @lang('general.user')</h3>
                            </div>
                            <!-- /.card-header -->


                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body mb-5">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.name')</label>
                                    <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                        class="form-control" id="exampleInputName" placeholder="@lang('general.name')">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.email')</label>
                                    <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                        class="form-control" id="exampleInputEmail" placeholder="@lang('general.email')">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.password')</label>
                                    <input type="password" name="password" value="" class="form-control"
                                        id="exampleInputPassword" placeholder="Enter @lang('general.password')">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">@lang('general.confirm_password')</label>
                                    <input type="password" name="confirm-password" value="{{ old('confirm-password') }}"
                                        class="form-control" id="exampleInputConfirmpassword"
                                        placeholder="Enter @lang('general.confirm_password')">
                                </div>


                                <div class="row">
                                    <div class="form-group">
                                        @include('admin.components.image', [
                                            'label' => __('general.image'),
                                            'value' => old('image',$user->image),
                                            'name' => 'image',
                                            'id' => 'kt_image_3',
                                            'accept' => 'image/*',
                                            'required' => true,
                                        ])
                
                                    </div>
                                </div>

                                <div class="card-footer mb-5 mt-5">
                                    <button type="submit" class="btn btn-outline-primary px-5">@lang('general.save')</button>
                                    <a href="{{ route('users.index') }}"
                                        class="btn btn-outline-danger px-5
                                    ">@lang('general.cancel')</a>
                                </div>
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
