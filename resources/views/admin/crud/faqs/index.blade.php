@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains faq content -->
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
                                            <h3 class="card-title">@lang('general.faqs')</h3>
                                        </div>
                                        <div class="col-md-6 d-flex d-flex justify-content-end">
                                            <a href="{{ route('faqs.create') }}">

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
                                    @include('admin.components.alert-success')
                                    <table id="example1" class="table  table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>@lang('general.title')</th>
                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($faqs as $faq)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $faq->title }}</td>
                                                    <td>
                                                        <form action="{{ route('faqs.destroy', $faq) }}" method="POST">
                                                            <a href="{{ route('faqs.show', $faq) }}" title="show">
                                                                <i class="fas fa-eye text-secondary fa-lg"></i>
                                                            </a>

                                                            <a href="{{ route('faqs.edit', $faq) }}" title="edit">
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