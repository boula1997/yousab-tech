@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains service content -->
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
                                <h3 class="card-title">Quick Example</h3>
                                <ol class="breadcrumb float-sm-right bg-light p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">General Form</li>
                                </ol>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <p>{{ $service->title }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Description</label>
                                        <p>{!! $service->description !!}</p>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <img width="300" height="300" src="{{ 
                                                        $service->image }}"
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
