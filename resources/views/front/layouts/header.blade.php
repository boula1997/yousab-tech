<!DOCTYPE html>
<html lang="zxx" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iitechie - IT Solutions and Services Html Template</title>
    <link rel=icon href="assets/img/favicon.webp" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @if (app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @endif
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body class='sc5'>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="topbar-right text-md-start text-center">
                        <li class="d-none d-none d-lg-inline-block">
                            <p><i class="far fa-clock"></i> {{ __('general.opening_hour') }}</p>
                        </li>
                        <li>
                            <p><i class="far fa-envelope"></i> exam@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <ul class="topbar-right text-md-end text-center">
                        <li class="d-none d-none d-lg-inline-block">
                            <p>{{ __('general.hotline') }} <span>: (+00)-333-444-5555</span></p>
                        </li>
                        <li class="social-area">
                            <p class="d-inline-block">{{ __('general.follow_us_on') }}</p>
                            <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-area navbar-area-1 navbar-expand-lg">
        <div class="container nav-container navbar-bg">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#Iitechie_main_menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="logo">
                <a href="index.html"><img src="{{ asset('assets/img/logo.webp') }}" alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <a class="search-bar-btn" href="#">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="Iitechie_main_menu">
                <ul class="navbar-nav menu-open text-lg-end">
                    <li><a class="{{ request()->routeIs('front.home') ? 'active' : '' }}"
                            href="{{ route('front.home') }}">{{ __('general.home') }}</a></li>
                    <li><a class="{{ request()->routeIs('front.service') ? 'active' : '' }}"
                            href="{{ route('front.service') }}">{{ __('general.services') }}</a></li>
                    <li><a class="{{ request()->routeIs('front.about') ? 'active' : '' }}"
                            href="{{ route('front.about') }}">{{ __('general.about') }}</a></li>
                    {{-- <li><a class="{{request()->routeIs('front.home')?'active':''}}" href="{{route('front.home')}}">Project</a></li> --}}
                    <li><a class="{{ request()->routeIs('front.message') ? 'active' : '' }}"
                            href="{{ route('front.message') }}">{{ __('general.message') }}</a></li>
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="{{ app()->getLocale() == $localeCode ? 'd-none' : '' }}">
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img src="{{ asset('flags/' . $localeCode . '.png') }}" class="flag"
                                    alt="KSA Flag">
                            </a>
                        </li>
                    @endforeach

                </ul>

            </div>
            <div class="nav-right-part nav-right-part-desktop align-self-center">
                <a class="search-bar-btn" href="#">
                    <i class="fa fa-search"></i>
                </a>
                <a class="btn btn-base" href="#">{{ __('general.get_started') }}</a>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
