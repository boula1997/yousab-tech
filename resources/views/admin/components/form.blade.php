@extends('admin.layouts.master')
@section('content')
    {{-- validation messages start --}}
    @if ($errors->any())
    
        <div class="content-wrapper alert alert-danger">
            <strong>@lang('general.errors')</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- validation messages end --}}


    <form action="@yield('form_action')" method="@yield('form_type')" enctype="multipart/form-data" id="form">
        @csrf
        @yield('fields_content')
    </form>

@endsection
