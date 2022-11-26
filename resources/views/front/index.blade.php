@extends('front.layouts.master')
@section('content')
    @include('front.components.slider')
    <div class="container">
        @include('front.components.services')
        @include('front.components.about')
               <!-- تواصلوا معنا الان Section -->
               <div class="mb-4">
                <div class="" data-aos-duration="3000" data-aos="fade-down">
                    {!! $contact_section->description  !!}
                </div>
                <div class="d-flex justify-content-center text-white" data-aos-duration="3000" data-aos="fade-down">
                    <a href="{{route('front.contact')}}">
                        <button class="btn sliderBtn">{{$contact_section->title}}</button>
                    </a>
                </div>
            </div>
            @include('front.components.counter')
    </div>
@endsection
