<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="description" content="Free Web tutorials for HTML and CSS">
   <meta name="keywords" content="HTML, CSS, JavaScript">
	<title>حدائف زهرة البستان</title>
	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="site/css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="site/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="logo" />
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
                     <a class="nav-link {{ Route::is('portfolios.index')? 'active' : '' }}" href="{{route('portfolios.index')}}">الاعمال</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('blogs.index')? 'active' : '' }}" href="{{route('blogs.index')}}">المقالات</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('services.index')? 'active' : '' }}" href="{{route('services.index')}}">خدماتنا</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('about.index')? 'active' : '' }}" href="{{ route('about.index') }}">من نحن؟</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ Route::is('home.index')? 'active' : '' }}" href="{{ route('home.index') }}">الرئسية</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>