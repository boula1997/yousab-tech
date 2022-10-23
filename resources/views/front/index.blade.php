@extends('front.layouts.master')
@section('content')
    @include('front.components.slider')
    <div class="container">
        @include('front.components.services')
        @include('front.components.about')
        @include('front.components.portfolio')
        @include('front.components.contact')
    </div>
@endsection
