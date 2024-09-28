@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains project content -->
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
                                    <!-- general form elements -->
                                    <div class="row">
                                        <div class="col-md-6 d-flex d-flex justify-content-start">
                                            <h1 class="card-title fw-bold">@lang('general.projects')</h1>
                                        </div>
                                        <div class="col-md-6 d-flex d-flex justify-content-end">
                                            <a href="{{ route('projects.create') }}">

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
                                    <table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('general.title')}}</th>
                                                <th>{{__('general.cost')}}</th>
                                                <th>{{__('general.rest')}}</th>
                                                <th>{{__('general.status')}}</th>
                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projects as $project)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $project->title }}</td>
                                                    <td class="cost">{{ $project->cost }}</td> <!-- Add class 'cost' to this cell -->
                                                    <td>{{ rest($project) }}</td>
                                                    <td>{{ $project->status ? __('general.yes') : __('general.no') }}</td>
                                                    <td>
                                                        @include('admin.components.controls', [
                                                            'route' => 'projects',
                                                            'role' => 'project',
                                                            'module' => $project,
                                                        ])
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <!-- Summary Row -->
                                        <tfoot>
                                            <tr>
                                                <td colspan="2" class="text-right fw-bold">Total Cost:</td>
                                                <td id="total-cost"></td> <!-- Cell to display the total cost -->
                                                <td colspan="3"></td>
                                            </tr>
                                        </tfoot>
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
        $(function() {
            const table = $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "paging": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            // Function to calculate the total cost for the currently visible rows
            function calculateTotalCost() {
                let totalCost = 0;

                // Select visible rows only using DataTables API
                table.rows({ search: 'applied' }).nodes().each(function(index, element) {
                    // Extract the cost value from the appropriate cell and add it to the total
                    let cost = parseFloat($(element).find('.cost').text()) || 0;
                    totalCost += cost;
                });

                // Display the total cost in the summary row
                $('#total-cost').text(totalCost.toFixed(2));
            }

            // Calculate the initial total cost for all visible rows
            calculateTotalCost();

            // Recalculate the total cost every time a search or filter is applied
            table.on('search.dt', function() {
                calculateTotalCost();
            });
        });
    </script>
@endpush


