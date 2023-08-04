@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains admin content -->
    <div class="content-wrapper">
        <!-- Content Header (admin header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">@lang('general.admins')</a></li>
                            <li class="breadcrumb-item active">@lang('general.show')</li>
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
                                <h3 class="card-title">@lang('general.show') @lang('general.admin')</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">@lang('general.name')</label>
                                        <p>{{ $admin->name }}</p>
                                    </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">@lang('general.email')</label>
                                        <p>{{ $admin->email }}</p>
                                    </div>


                                    <div class="row">
                                        <div class="form-group">
                                            <label for="exampleInputFile1">@lang('general.image')</label>
                                            <div class="col-md-6">
                                                <div class="form-group text-center">
                                                    <img width="300" height="300" src="{{ $admin->file->url }}"
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
