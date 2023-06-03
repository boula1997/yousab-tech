<style>
     .hm-gradient {
        background: #57FA57;
        border-radius: 4px;
    }

</style>
@extends('front.layouts.master')
@section('content')
	<!-- full Title -->
	<div class="full-title">
		<div class="container text-center">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">الخدمات
			</h1>
		</div>
	</div>
    <div class="container">
        <div class="hm-gradient mb-5">
            <div class="container p-4" style="font-size: 20px">
                <a style="color: #4E3A14" href="index.html">الرئيسية</a> / <span
                    style="color: white">{{ $service_section->title }}</span>
            </div>
        </div>
        @include('front.components.services')
        @include('front.components.partners')
    </div>
@endsection
