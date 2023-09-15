@extends('admin.components.form')
@section('form_action', route('roles.update', $role->id))
@section('form_type', 'POST')
@section('fields_content')
    <!-- Content Wrapper. Contains blog content -->
    <div class="content-wrapper">
        <!-- Content Header (blog header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@lang('general.edit')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">@lang('general.roles')</a></li>
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
                                <h3 class="card-title"> @lang('general.create') @lang('general.user')</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <div class="row p-3">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>@lang('general.name'):</strong>
                                        {!! Form::text('name', old('name',$role->name), ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>@lang('general.permission'):</strong>
                                        <br />
                                        <div class="row">
                                            @foreach ($permission as $value)
                                                {{-- <div class="col-md-3">
                                                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'name']) }}
                                                        {{ $value->name }}</label>
                                                </div> --}}

                                                <div class="col-3">
                                                    <div
                                                        class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                        <input type="checkbox" @checked(in_array($value->id, $rolePermissions) ? true : false) name="permission[]"
                                                            value="{{ $value->id }}" class="custom-control-input"
                                                            id="customSwitch{{ $value->id  }}">
                                                        <label class="custom-control-label"
                                                            for="customSwitch{{ $value->id  }}">{{ $value->name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit"
                                        class="btn btn-outline-primary px-5
                                        ">@lang('general.save')</button>
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

<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>
@endpush
