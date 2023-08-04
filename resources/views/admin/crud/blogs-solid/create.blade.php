@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @section('title', settings()->website_title . '|' . 'Create Blog')

            @section('breadcrumb')
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Create Blog</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">@lang('general.create') Blog</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
            @endsection


            <!-- Main content -->
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Create Blog</h3>
                                </div>
                                <!-- /.card-header -->
                                @extends('admin.components.create-form')
                                @section('form_action', "{{ route('blogs.store') }}")
                                @section('form_type', 'POST')

                                @section('form_content')
                                    <!-- form start -->

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="title" value="{{ old('title') }}" class="form-control"
                                            id="exampleInputName" placeholder="@lang('general.name')">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputDescription">@lang('general.description')</label>
                                        <textarea id="summernote" name="description">
                                                {{ old('description') }}
                                            </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile1">File input</label>
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
                                    {{-- <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div> --}}


                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">@lang('general.save')</button>
                                    </div>
                                @endsection

                            </div>
                            <!-- /.card -->


                        </div>
                        <!--/.col (left) -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
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
