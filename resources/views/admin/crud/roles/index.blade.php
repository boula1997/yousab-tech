@extends('admin.layouts.master')

@section('content')
            <!-- Container-fluid starts-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <!-- Table Start -->
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Role List</h5>
                                        <form class="d-inline-flex">
                                            <a href="{{route('roles.create')}}" class="align-items-center btn btn-theme d-flex">
                                                <i data-feather="plus"></i>Add Role
                                            </a>
                                        </form>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table id="table_id" class="table role-table all-package theme-table">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Create At</th>
                                                        <th>Options</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($roles as $role)
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Dummy</td>
                                                        <td>3 weeks ago</td>
                                                        <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="{{route('roles.edit',$role->id)}}">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalToggle">
                                                                        <i class="ri-delete-bin-line"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table End -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
            </div>
@endsection