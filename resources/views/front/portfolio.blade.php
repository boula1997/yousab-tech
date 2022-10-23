@extends('front.layouts.master')
@section('content')
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Portfolios
				<small>Subheading</small>
			</h1>
		</div>
	</div>
    <div class="container">
        <div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">الرئسية</a>
				</li>
				<li class="breadcrumb-item active">Portfolios</li>
			</ol>
		</div>
        <img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />
        @include('front.components.portfolio')
        @include('front.components.partners')
    </div>
@endsection