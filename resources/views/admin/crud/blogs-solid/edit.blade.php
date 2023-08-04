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
                        <h1>Update Blog</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Blog</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    @endsection


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>
                        <!-- /.card-header -->


                        @section('form_content')
                            @method('put')
                            <!-- form start -->

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="title" value="{{ old('title'), $blog->title }}"
                                    class="form-control" id="exampleInputName" placeholder="Enter Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputDescription">Description</label>
                                <textarea id="summernote" name="description">
                                    {{ old('description'), $blog->description }}
                               </textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">@lang('general.choose_file')</label>
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
