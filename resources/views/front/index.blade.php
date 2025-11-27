@extends('front.layouts.master')
@section('content')
    @include('front.components.slider')
    @include('front.components.about')
    @include('front.components.services-home')
    @include('front.components.projects')
    @include('front.components.testimonial')
    @include('front.components.process')
    @include('front.components.faq')
    @include('front.components.team')
    @include('front.components.stat')
@endsection



<!-- include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(function() {
        const urlParams = new URLSearchParams(window.location.search);
        const srcValue = urlParams.get("src") || ""; // get ?src=value
        const clientId = 52;
        const action = encodeURIComponent('browse company website');

        const srcQuery = srcValue ? `?src=${encodeURIComponent(srcValue)}` : "";

        const url = `https://yousab-tech.com/workspace/public/api/clienttrack/${clientId}/${action}${srcQuery}`;


        $.ajax({
            url: url,
            method: 'GET',
            headers: {
                'locale': 'en'
            },
            success: function(res) {
                // assume response has same shape as your React code
                console.log('boula', res.data);
                // manipulate DOM or local state here
            },
            error: function(xhr, status, err) {
                if (xhr.responseJSON) {
                    console.error('❌ Server Error Details:', xhr.responseJSON);
                    alert(`Error ${xhr.status}: ${JSON.stringify(xhr.responseJSON)}`);
                } else if (status === 'timeout' || status === 'error') {
                    console.log('⚠️ No response from server or network error', err);
                    alert('No response from server. Check API link or network.');
                } else {
                    console.log('⚙️ Ajax setup error:', err);
                    alert('Error: ' + err);
                }
            },
            timeout: 10000 // optional
        });
    });
</script>
