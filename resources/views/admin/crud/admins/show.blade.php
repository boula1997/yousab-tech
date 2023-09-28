@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains admin content -->
    <div class="content-wrapper">
        <!-- Content Header (admin header) -->
        @include('admin.components.breadcrumb', ['module' => 'admins', 'action' => 'show'])

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
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">@lang('general.email')</label>
                                        <p>{{ $admin->email }}</p>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img width="300" height="300" src="{{ $admin->image }}" alt="">

                                            </div>
                                        </div>
                                    </div>

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
