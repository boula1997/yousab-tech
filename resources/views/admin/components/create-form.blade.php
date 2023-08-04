@section('content')
    {{-- validation messages start --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>@lang('general.errors')</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- validation messages end --}}


    <form action="@yield('form_action')" method="@yield('form_type')" enctype="multipart/form-data" d="form">
        <div class="card-body">
            @csrf
            @yield('form_content')
        </div>
    </form>

@endsection
