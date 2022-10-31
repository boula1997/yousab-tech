@extends('front.layouts.master')
@section('content')
    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">{{ $service->title }}
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">الرئسية</a>
                </li>
                <li class="breadcrumb-item active">{{ $service->title }}</li>
            </ol>
        </div>

    </div>
    <div class="about-main">
        <div class="row">
           <div class="col-lg-6" >
              <h2>{{ $service->title }}</h2>
              {!!  $service->description  !!}
           </div>
           <div class="col-lg-6" style="padding-top: 20px">
              <img class="img-fluid rounded" src="{{ asset($service->image)}}" alt="" />
           </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
