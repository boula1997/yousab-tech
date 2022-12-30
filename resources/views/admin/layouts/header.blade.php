<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>لوحة التحكم</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('public/admin/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('public/admin/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{ asset('public/admin/css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3LMD3XH4D9"></script>


<body>
  
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('front.home')}}">
                        <img src="{{ asset('public/admin/img/logo.png') }}" />
                    </a>
                </div>

                <span class="logout-spn">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        {{-- <a href="{{route('logout')}}" style="color:#fff;">LOGOUT</a> --}}
                     <button class="btn btn-primary"  type="submit">تسجيل الخروج</button>
                    </form>
                    

                </span>
            </div>
        </div>