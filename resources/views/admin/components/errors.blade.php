    {{-- validation messages start --}}
    @if ($errors->any())
            <div class="alert alert-danger p-2">
                <div class="row">
                    <strong>@lang('general.errors')</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
    @endif
    {{-- validation messages end --}}