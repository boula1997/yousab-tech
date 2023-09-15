@extends('admin.layouts.master')
@section('content')
    {{-- validation messages start --}}
    @if ($errors->any())
        <div class="content-wrapper p-3">
            <div class="container alert alert-danger p-2">
                <div class="row">
                    <strong>@lang('general.errors')</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif
    <form action="@yield('form_action')" method="@yield('form_type')" enctype="multipart/form-data" id="form">
        {{-- validation messages end --}}
        @csrf
        @yield('fields_content')
    </form>

@endsection
