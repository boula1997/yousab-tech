@extends('front.layouts.master')
@section('content')
  <!-- full Title -->
  <div class="full-title">
    <div class="container" style="text-align:center;">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">تواصل معنا</h1>
      <h4 style="color: white;">يمكنكم التواصل معنا من خلال النموذج التالي</h4>
      <h4 style="color: white;">وسيتم الرد عليكم في اسرع وقت</h4>
    </div>
  </div>
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">الرئسية</a>
              </li>
              <li class="breadcrumb-item active">تواصل معنا</li>
            </ol>
          </div>
        <img class="img-fluid rounded mb-4" src="images/services-big.jpg" alt="" />
        @include('front.components.contact')
        @include('front.components.partners')
    </div>
@endsection