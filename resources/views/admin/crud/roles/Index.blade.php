{{-- @extends('layouts.app') --}}
@extends('admin.layouts.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content pt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>@lang('general.role_mangement')</h2>
                        </div>
                        <div class="pull-right">
                            @can('role-create')
                                <a class="btn btn-success" href="{{ route('roles.create') }}"> @lang('general.create_role')</a>
                            @endcan
                        </div>
                    </div>
                </div>


                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif


                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>@lang('general.name')</th>
                        <th width="280px">@lang('general.action')</th>
                    </tr>
                    @foreach ($roles as $key => $role)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('roles.show', $role->id) }}">@lang('general.show')</a>
                                @can('role-edit')
                                    <a class="btn btn-primary" href="{{ route('roles.edit', $role->id) }}">@lang('general.edit')</a>
                                @endcan
                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </table>


                {!! $roles->render() !!}

            </div>


        </section>
    </div><!-- /.container-fluid -->
    <!-- /.content -->
@endsection
