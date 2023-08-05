@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains blog content -->
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
                                <!-- general form elements -->
                                <div class="row">
                                    <div class="col-md-6 d-flex d-flex justify-content-start">
                                        <h3 class="card-title">@lang('general.blogs')</h3>
                                    </div>
                                    <div class="col-md-6 d-flex d-flex justify-content-end">
                                        <a href="{{route('blogs.create')}}">

                                            <button class="btn btn-outline-primary px-5
"><i class="fa fa-plus fa-sm px-2" aria-hidden="true"></i> @lang('general.add')</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
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
                                            <th>@lang('general.image')</th>
                                            <th>@lang('general.title')</th>
                                            <th>@lang('general.controls')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img width="100" height="100" src="{{ $blog->file->url }}" alt="{{ $blog->title }}"></td>
                                                <td>{{ $blog->title }}</td>
                                                <td>
                                                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST">
                                                        <a href="{{ route('blogs.show', $blog) }}" title="show">
                                                            <i class="fas fa-eye text-secondary fa-lg"></i>
                                                        </a>

                                                        <a href="{{ route('blogs.edit', $blog) }}" title="edit">
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
