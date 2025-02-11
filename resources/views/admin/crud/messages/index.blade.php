@extends('admin.layouts.master')

@section('content')
    <!-- Container-fluid starts-->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title d-sm-flex d-block">
                                <h5>{{'general.messages'}}</h5>
                                <div class="right-options">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)">import</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Export</a>
                                        </li>
                                        <li>
                                            <a class="btn btn-solid" href="{{route('messages.create')}}">{{__('general.create')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="table-responsive">
                                    <table class="table all-package theme-table table-message" id="table_id">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('general.name')}}</th>

                                                <th>{{__('general.email')}}</th>

                                                <th>{{__('general.phone')}}</th>

                                                <th>{{__('general.message')}}</th>

                                                <th>{{__('general.created_at')}}</th>

                                                <th>{{__('general.updated_at')}}</th>
                                                <th>@lang('general.controls')</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($data as $message)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>


                                                    <td>{{ $message->name }}</td>

                                                    <td>{{ $message->email }}</td>
                                                    
                                                    <td>{{ $message->phone }}</td>
                                                    
                                                    <td>{{ $message->message }}</td>
                                                    
                                                    <td>{{ $message->created_at }}</td>
                                                    
                                                    <td>{{ $message->updated_at }}</td>
                                                    <td>
                                                        @include('admin.components.controls', [
                                                            'route' => 'messages',
                                                            'role' => 'message',
                                                            'module' => $message,
                                                        ])
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">{{settings()->copyright}}</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
