@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains complain content -->
    <div class="content-wrapper">
        <div class="container p-3">

            <!-- Main content -->
            <section class="content pt-2">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card">
                                <div class="card-header">
                                    <!-- general form elements -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex d-flex justify-content-start">
                                            <h1 class="card-title fw-bold">@lang('general.complains')</h3>
                                        </div>
                                        <div class="col-md-6 d-flex d-flex justify-content-end">
                                            <a href="{{ route('complains.create') }}">

                                                <button
                                                    class="btn btn-outline-primary px-5
                                               "><i
                                                        class="fa fa-plus fa-sm px-2" aria-hidden="true"></i>
                                                    @lang('general.add')</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <table id="example1" class="table  table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>@lang('general.title')</th>
                                                <th>@lang('general.repeat')</th>
                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($complains as $complain)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $complain->title }}</td>
                                                    <td>{{ $complain->repeat }}</td>
                                                    <td>
                                                        @include('admin.components.controls', [
                                                            'route' => 'complains',
                                                            'role' => 'complain',
                                                            'module' => $complain,
                                                        ])
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection


@push('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
