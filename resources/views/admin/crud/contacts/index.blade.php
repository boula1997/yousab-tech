@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains contact content -->
    <div class="content-wrapper">
        <div class="conainer p-5">

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
                                            <h3 class="card-title">@lang('general.contacts')</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    @include('admin.components.alert-success')
                                    <table id="example1" class="table  table-hover">
                                        <thead class="h-2">
                                            <tr class="p-0 m-0">
                                                <th>#</th>
                                                <th>@lang('general.name')</th>
                                                <th>@lang('general.email')</th>
                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $contact)
                                                <tr class="p-0 m-0">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $contact->name }}</td>
                                                    <td>{{ $contact->email }}</td>
                                                    <td>
                                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                                            <a href="{{ route('contacts.show', $contact->id) }}" title="show">
                                                                <i class="fas  fa-eye text-secondary"></i>
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
