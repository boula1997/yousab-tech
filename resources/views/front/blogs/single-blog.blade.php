@extends('front.layouts.master')
@section('content')
    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">{{ $blog->title }}
                <small>{{ $blog->subtitle }}</small>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">الرئسية</a>
                </li>
                <li class="breadcrumb-item active">{{ $blog->title }}</li>
            </ol>
        </div>

    </div>
    <div class="about-main">
        <div class="row">
            <div class="col-lg-2"></div>
            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="{{ asset($blog->image) }}" alt="" />
                <hr>
                <!-- Date/Time -->
                <p>Posted on {{ $blog->created_at }}</p>
                <hr>
                <!-- Post Content -->
                
                    {!! $blog->description !!}
                
                <hr>

            </div>
            <div class="col-lg-2"></div>
        </div>
        <!-- /.row -->
    </div>
@endsection
