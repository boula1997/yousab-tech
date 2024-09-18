@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains fee content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="container p-3">
            <section class="content pt-2">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6 d-flex justify-content-start">
                                            <h1 class="card-title fw-bold">@lang('general.fees')</h1>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <a href="{{ route('fees.create') }}">
                                                <button class="btn btn-outline-primary px-5">
                                                    <i class="fa fa-plus fa-sm px-2" aria-hidden="true"></i>
                                                    @lang('general.add')
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('general.cost')}}</th>
                                                <th>{{__('general.amount')}}</th>
                                                <th>{{__('general.project')}}</th>
                                                <th>{{__('general.rest')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($fees as $fee)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $fee->project->cost }}</td>
                                                    <td>{{ $fee->amount }}</td>
                                                    <td>{{ $fee->project->title }}</td>
                                                    <td>{{ $fee->rest }}</td>
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
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Function to load the value into the search input and trigger search
            function loadSearchValue() {
                if (localStorage.getItem('searchValue')) {
                    const $searchInput = $('input[type="search"]');
                    $searchInput.val(localStorage.getItem('searchValue'));
                    $searchInput.trigger('input'); // Trigger the input event to start the search
                }
            }

            // Check for the input field's existence every 500ms
            const interval = setInterval(function() {
                if ($('input[type="search"]').length > 0) {
                    loadSearchValue();
                    clearInterval(interval); // Stop checking once the input is found
                }
            }, 500);

            // Save the value to localStorage whenever the input value changes
            $(document).on('input', 'input[type="search"]', function() {
                localStorage.setItem('searchValue', $(this).val());
            });
        });





        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "paging": false,
                "searching": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        function toggleCheckbox(feeId) {
            const checkbox = document.getElementById(`checkbox-${feeId}`);
            const feeRow = $(`#checkbox-${feeId}`).closest('tr').find('td:nth-child(2)');

            checkbox.checked = !checkbox.checked;

            if (checkbox.checked) {
                feeRow.css('background-color', 'yellow');
            } else {
                feeRow.css('background-color', '');
            }
        }
    </script>
@endpush
