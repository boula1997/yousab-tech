@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains slider content -->
    <div class="content-wrapper">
        <!-- Content Header (slider header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Slider</a></li>
                            <li class="breadcrumb-item active">Show</li>
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
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <p>{{ $slider->title }}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <p>{!! $slider->description !!}</p>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <img width="300" height="300" src="{{ $slider->image }}"
                                                        alt="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> --}}
                        </div>
                        <!-- /.card-body -->


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
