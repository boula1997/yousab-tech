@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains admin content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content pt-2">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <!-- general form elements -->
                                <div class="row">
                                    <div class="col-md-6 d-flex d-flex justify-content-start">
                                        <h1 class="card-title fw-bold">@lang('general.admins')</h3>
                                    </div>
                                    <div class="col-md-6 d-flex d-flex justify-content-end">
                                        <a href="{{ route('admins.create') }}">

                                            <button class="btn btn-outline-primary px-5"><i class="fa fa-plus fa-sm px-2"
                                                    aria-hidden="true"></i> @lang('general.add')</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              
                                <table id="example1" class="table  table-hover">
                                    <thead class="h-2">
                                        <tr class="p-0 m-0">
                                            <th>#</th>
                                            <th>@lang('general.image')</th>
                                            <th>@lang('general.name')</th>
                                            <th>@lang('general.email')</th>
                                            <th>@lang('general.role')</th>
                                            <th>@lang('general.controls')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $admin)
                                            <tr class="p-0 m-0">
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img width="100" height="100" src="{{ $admin->image }}"
                                                        alt="{{ $admin->name }}"></td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>
                                                    @if (!empty($admin->getRoleNames()))
                                                        @foreach ($admin->getRoleNames() as $v)
                                                            <label class="badge badge-success">{{ $v }}</label>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    @include('admin.components.controls', [
                                                        'route' => 'admins',
                                                        'role' => 'admin',
                                                        'module' => $admin,
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
    <!-- /.content-wrapper -->
@endsection


@push('scripts')
    <script>
        $(function() {
            // Define a unique key for your DataTable state in localStorage
            const tableStateKey = "coursesTableState";

            // Initialize DataTable with stateSave and custom state management
            var table = $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                "stateSave": true, // Enable state saving
                "stateLoadCallback": function(settings) {
                    // Load the state from localStorage
                    var savedState = localStorage.getItem(tableStateKey);
                    return savedState ? JSON.parse(savedState) : null;
                },
                "stateSaveCallback": function(settings, data) {
                    // Save the state to localStorage
                    localStorage.setItem(tableStateKey, JSON.stringify(data));
                }
            });

            // Append DataTable buttons to container
            table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endpush
