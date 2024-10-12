@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains task content -->
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
                                            <h1 class="card-title fw-bold">@lang('general.tasks')</h1>
                                        </div>
                                        <div class="col-md-6 d-flex justify-content-end">
                                            <a href="{{ route('tasks.create') }}">
                                                <button class="btn btn-outline-primary px-5">
                                                    <i class="fa fa-plus fa-sm px-2" aria-hidden="true"></i>
                                                    @lang('general.add')
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('tasks.bulkAction') }}" method="POST">
                                        @csrf
                                        <div class="row d-flex align-items-center">
                                            {{-- Dynamic Select Input --}}
                                            <div class="col-md-4 mb-4">
                                                <label
                                                    class="col-form-label text-right">{{ __('general.employees') }}</label>
                                                <select class="form-control selectpicker" id="multiSelect1"
                                                    multiple="multiple" data-live-search="true" name="employees[]">
                                                    <option value="">{{ __('general.select') }}</option>
                                                    @foreach ($employees as $employee)
                                                        <option value="{{ $employee->id }}"
                                                            {{ collect(old('employees'))->contains($employee->id) ? 'selected' : '' }}>
                                                            {{ $employee->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="">
                                                    <button type="submit" name="action" value="assign"
                                                        class="btn btn-primary">
                                                        @lang('general.assign_employee')
                                                    </button>

                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit" name="action" value="delete"
                                                        class="btn btn-danger">
                                                        @lang('general.delete_tasks')
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                        <table id="example1" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{ __('general.title') }}</th>
                                                    <th class="d-none">{{ __('general.select') }}</th>
                                                    <th>{{ __('general.employees') }}</th>
                                                    <th>{{ __('general.project') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tasks as $task)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td style="cursor: pointer"
                                                            onclick="toggleCheckbox({{ $task->id }})">
                                                            {{ $task->title }}
                                                        </td>
                                                        <td class="d-none">
                                                            <input type="checkbox" name="tasks[]"
                                                                value="{{ $task->id }}"
                                                                id="checkbox-{{ $task->id }}">
                                                        </td>
                                                        <td>{{ taskEmployees($task->title) }}</td>
                                                        <td>{{ $task->project->title }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </form>
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

        function toggleCheckbox(taskId) {
            const checkbox = document.getElementById(`checkbox-${taskId}`);
            const taskRow = $(`#checkbox-${taskId}`).closest('tr').find('td:nth-child(2)');

            checkbox.checked = !checkbox.checked;

            if (checkbox.checked) {
                taskRow.css('background-color', 'yellow');
            } else {
                taskRow.css('background-color', '');
            }
        }
    </script>
@endpush
