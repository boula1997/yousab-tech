@extends('front.layouts.master')
@section('content')
    @include('front.components.slider')
    <div class="container">
        @include('front.components.services')
        @include('front.components.about')
        @include('front.components.portfolio')
               <!-- تواصلوا معنا الان Section -->
               <div class="row mb-4">
                <div class="col-md-8">
                    {!! $contact_section->description  !!}
                </div>
                <div class="col-md-4">
                   <a class="btn btn-lg btn-secondary btn-block" href="{{route('front.contact')}}">{{$contact_section->title}}</a>
                </div>
            </div>
    </div>
@endsection
