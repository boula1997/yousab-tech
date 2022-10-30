<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="description" content="Free Web tutorials for HTML and CSS here  is going be object">
   <meta name="keywords" content="{{asset($setting->meta_data)}}">
	<title>حدائف زهرة البستان</title>
   <link rel="icon" href="{{asset($setting->logo)}}">
	<!-- Bootstrap core CSS -->
	<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="{{asset('site/css/all.css')}}" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{asset('site/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('front.home')}}">
            <img src="{{asset($setting->logo)}}" alt="logo" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>   
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('contact.index')? 'active' : '' }}" href="{{ route('contact.index') }}">تواصل معنا</a>
                  </li>
                  {{-- <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     الصفحات
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="faq.html">اسئلة شائعة</a>
                        <a class="dropdown-item" href="404.html">صفحة الخطا</a>
                        <a class="dropdown-item" href="pricing.html">جدول الاسعار</a>
                     </div>
                  </li> --}}
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('front.portfolio')? 'active' : '' }}" href="{{route('front.portfolio')}}">الاعمال</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('front.blog')? 'active' : '' }}" href="{{route('front.blog')}}">المقالات</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('front.service')? 'active' : '' }}" href="{{route('front.service')}}">خدماتنا</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('front.about')? 'active' : '' }}" href="{{ route('front.about') }}">من نحن؟</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('front.home')? 'active' : '' }}" href="{{ route('front.home') }}">الرئسية</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>