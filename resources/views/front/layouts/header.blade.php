<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="الفيروز لتنسيق الحدائق و اعمال اللاندسكيب تركيب نجيل و ثيل و مظلات مسابح و شلالات اقل سعر اعلي جودة">
    <meta name="keywords" content="{{asset('public/'.$setting->meta_data)}}">
    <meta name="google-site-verification" content="l9ckpRd1nnm4e6bib_Il9gnvHUnTVIuGGF-atI5zOM4" />
    <title>شركة حدائق الفيروز</title>
    <link rel="icon" href="{{asset('public/'.$setting->tab)}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="{{asset('public/site/css/all.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('public/site/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/site/css/lightbox.css')}}" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>

    <style>
        .navbar {
            background: rgb(92, 255, 92);
            background: linear-gradient(90deg, rgba(92, 255, 92, 1) 0%, rgba(0, 163, 0, 1) 100%);
        }

        .dropdown-item:hover {
            color: #fff !important;
            background: rgb(92, 255, 92);
            background: linear-gradient(90deg, rgba(92, 255, 92, 1) 0%, rgba(0, 163, 0, 1) 100%);
        }

        .nav-item .active {
            color: #fff !important;
        }

        .nav-item a {
            color: black !important;
            font-size: 18px;
            margin-left: 10px;
        }

        @media (min-width: 1200px) {
            height: 150px;
            widows: 160px;
        }

    </style>
</head>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3LMD3XH4D9');
</script>

<body style="padding: 0 !important">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left links -->
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('front.home')? 'active' : '' }}"
                            href="{{ route('front.home') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('front.about')? 'active' : '' }}"
                            href="{{ route('front.about') }}">من
                            نحن؟</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('front.service')? 'active' : '' }}"
                            href="{{route('front.service')}}">خدماتنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('front.blog')? 'active' : '' }}"
                            href="{{route('front.blog')}}">المقالات</a>
                    </li>
                    <!-- Navbar dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Route::is('front.portfolio')? 'active' : '' }}" href="#"
                            id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                            اعمالنا
                        </a>
                        <!-- Dropdown menu -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach ($portfolios as $portfolio)
                            <li class="m-auto">
                                <a class="dropdown-item d-flex"
                                    href="{{route('front.portfolio',['id'=>$portfolio->id])}}">{{$portfolio->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('front.video')? 'active' : '' }}"
                            href="{{ route('front.video') }}">فيديوهاتنا
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::is('front.contact')? 'active' : '' }}"
                            href="{{ route('front.contact') }}">تواصل معنا</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="{{route('front.home')}}">
                    <img src="{{asset('public/'.$setting->logo)}}" alt="Logo" loading="lazy"
                        style="width: 200px; height: 100px; border-radius: 10px; box-shadow: 10px; object-fit:cover; display: block;" />
                </a>
            </div>

            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
