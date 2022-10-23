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
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                   <a class="btn btn-lg btn-secondary btn-block" href="#">تواصلوا معنا الان</a>
                </div>
            </div>
    </div>
@endsection
