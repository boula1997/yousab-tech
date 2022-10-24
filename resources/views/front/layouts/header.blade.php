<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>حدائف زهرة البستان</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
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
                     <a class="nav-link {{ Route::is('contact')? 'active' : '' }}" href="{{ route('contact') }}">تواصل معنا</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     الصفحات
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="faq.html">اسئلة شائعة</a>
                        <a class="dropdown-item" href="404.html">صفحة الخطا</a>
                        <a class="dropdown-item" href="pricing.html">جدول الاسعار</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="{{ Route::is('portfolio')? 'active' : '' }}" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     المقالات
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="blog-home-1.html">المقال 1</a>
                        <a class="dropdown-item" href="blog-home-2.html">المقال2</a>
                        <a class="dropdown-item" href="blog-post.html">3 المقال</a>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     اعمالنا
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <a class="dropdown-item" href="portfolio-1-col.html">1 سابقة الاعمال</a>
                        <a class="dropdown-item" href="portfolio-2-col.html">2 سابقة الاعمال</a>
                        <a class="dropdown-item" href="portfolio-3-col.html">3 سابقة الاعمال</a>
                        <a class="dropdown-item" href="portfolio-4-col.html">4 سابقة الاعمال</a>
                        <a class="dropdown-item" href="portfolio-item.html">عرض سابقة الاعمال</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.html">خدماتنا</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">من نحن؟</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="index.html">الرئسية</a>
                  </li>
               </ul>
            </div>
        </div>
    </nav>