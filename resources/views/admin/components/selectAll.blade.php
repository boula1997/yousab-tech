@if ($on && $off)
<div class="row">
    <div class="col-md-3">
        <div class="custom-control custom-switch custom-switch-off-{{ $off }} custom-switch-on-{{ $on }}">
            <input type="checkbox"
                class="custom-control-input" value="{{ true }}"
                id="selectAll">
            <label class="custom-control-label" id="label"
                for="selectAll">{{ __('words.selectAll') }}</label>
        </div>
    </div>
</div>
@endif


@push('scripts')
    <script>
        $("#selectAll").on('click',function() {
            if (this.checked){
                $('#label').text("{{ __('words.dselectAll') }}");
            }
            else{
                $('#label').text("{{ __('words.selectAll') }}");
            }

            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
@endpush
