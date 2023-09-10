@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains user content -->
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
                                        <h3 class="card-title"><th>@lang('general.users')</th></h3>
                                    </div>
                                    <div class="col-md-6 d-flex d-flex justify-content-end">
                                        <a href="{{route('users.create')}}">
                                            
                                            <button class="btn btn-outline-primary px-5
"><i class="fa fa-plus fa-sm px-2" aria-hidden="true"></i> @lang('general.add')</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p style="text-align: end">{{ $message }} </p>
                                    </div>
                                @endif
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead class="h-2">
                                        <tr class="p-0 m-0">
                                            <th>#</th>
                                            <th>@lang('general.image')</th>
                                            <th>@lang('general.name')</th>
                                            <th>@lang('general.email')</th>
                                            <th>@lang('general.controls')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $user)
                                            <tr class="p-0 m-0">
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img width="100" height="100" src="{{ $user->file?$user->image:'' }}"
                                                        alt="{{ $user->name }}"></td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        <a href="{{ route('users.show', $user->id) }}" title="show">
                                                            <i class="fas  fa-eye text-secondary"></i>
                                                        </a>

                                                        <a href="{{ route('users.edit', $user->id) }}" title="edit">
                                                            <i class="fas  fa-edit  text-secondary "></i>
                                                        </a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" title="delete"
                                                            style="border: none; background-color:transparent;">
                                                            <i class="fas  fa-trash text-secondary"></i>
                                                        </button>
                                                    </form>
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
