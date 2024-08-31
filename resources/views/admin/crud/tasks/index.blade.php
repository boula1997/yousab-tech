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
                                        <div class="row">
                                            {{-- Dynamic Select Input --}}
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="employee" class="form-label">{{ __('general.employee') }}</label>
                                                    <select class="form-select form-select-lg" name="employee_id" id="employee" >
                                                        <option value="">{{ __('general.select') }}</option>
                                                        @foreach ($employees as $employee)
                                                            <option value="{{ $employee->id }}">
                                                                {{ $employee->name }} 
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <button type="submit" name="action" value="assign" class="btn btn-primary">
                                                    @lang('general.assign_employee')
                                                </button>
                                                <button type="submit" name="action" value="delete" class="btn btn-danger">
                                                    @lang('general.delete_tasks')
                                                </button>
                                            </div>
                                        </div>
                                        <table id="example1" class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>{{ __('general.title') }}</th>
                                                    <th>{{ __('general.select') }}</th>
                                                    @if (auth()->user()->type == 'admin')
                                                        <th>{{ __('general.employee') }}</th>
                                                    @endif
                                                    <th>{{ __('general.project') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tasks as $task)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td onclick="toggleCheckbox({{ $task->id }})">
                                                            {{ $task->title }}
                                                        </td>
                                                        <td>
                                                            <input type="checkbox" name="tasks[]" value="{{ $task->id }}" id="checkbox-{{ $task->id }}">
                                                        </td>
                                                        @if (auth()->user()->type == 'admin')
                                                            <td>{{ $task->employee->name }}</td>
                                                        @endif
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
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "searching": true,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });

        function toggleCheckbox(taskId) {
            const checkbox = document.getElementById(`checkbox-${taskId}`);
            checkbox.checked = !checkbox.checked;
        }
    </script>
@endpush
