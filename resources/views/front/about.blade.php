@extends('front.layouts.master')
@section('content')
    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">{{$about_section->title}}
                <small>{{$about_section->subtitle}}</small>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">الرئسية</a>
                </li>
                <li class="breadcrumb-item active">{{$about_section->title}}</li>
            </ol>
        </div>
        @include('front.components.about')
        @include('front.components.team')
        @include('front.components.partners')
    </div>
@endsection
