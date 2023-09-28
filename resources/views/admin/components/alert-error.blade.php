@if ($message = Session::get('error'))
    <div class="row">
        <div class="alert alert-success">
            <p style="text-align: start">{{ $message }} </p>
        </div>
    </div>
@endif
