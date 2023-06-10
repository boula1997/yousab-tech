@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains count content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content pt-2">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p style="text-align: end">{{ $message }} </p>
                                    </div>
                                @endif
                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Counter</th>
                                            <th>Controls</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($counters as $counter)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $counter->title }}</td>
                                                <td>{{ $counter->count }}</td>
                                                <td>
                                                    <form action="{{ route('counters.destroy', $counter) }}" method="POST">
                                                        <a href="{{ route('counters.show', $counter) }}" title="show">
                                                            <i class="fas fa-eye text-secondary fa-lg"></i>
                                                        </a>

                                                        <a href="{{ route('counters.edit', $counter) }}" title="edit">
                                                            <i class="fas fa-edit  text-secondary  fa-lg"></i>
                                                        </a>

                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" title="delete"
                                                            style="border: none; background-color:transparent;">
                                                            <i class="fas fa-trash fa-lg text-secondary"></i>
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
