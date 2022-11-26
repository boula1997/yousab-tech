<style>
    .hm-gradient {
        background: #57FA57;
        border-radius: 4px;
    }

</style>


@extends('front.layouts.master')
@section('content')
<!-- full Title -->

<div class="full-title">
    <div class="container" style="text-align:center;">
        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3 text-center">فيديوهاتنا
        </h1>
    </div>
</div>
<div class="container">
    <div class="hm-gradient mb-5">
        <div class="container p-4" style="font-size: 20px">
            <a style="color: #4E3A14" href="index.html">الرئيسية</a> / <span style="color: white">فيديوهاتنا</span>
        </div>
    </div>
</div>
<div class="m-auto">
    <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel" data-mdb-touch="true" data-interval="false">
        <div class="carousel-inner rounded-5">
            <div class="carousel-item active m-auto text-center">
                    <iframe width="75%" height="70%" src="https://www.youtube.com/embed/CB_rXABU8DI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="carousel-item m-auto text-center">
                <iframe width="75%" height="70%" src="https://www.youtube.com/embed/CB_rXABU8DI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <div class="carousel-item m-auto text-center">
                <iframe width="75%" height="70%" src="https://www.youtube.com/embed/CB_rXABU8DI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
        <button class="carousel-control-prev text-black" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="prev">
            <span class="carousel-control-prev-icon text-black" aria-hidden="true"></span>
            <span class="visually-hidden text-black">Previous</span>
        </button>
        <button class="carousel-control-next text-black" type="button" data-mdb-target="#carouselExampleControls"
            data-mdb-slide="next">
            <span class="carousel-control-next-icon text-black" aria-hidden="true"></span>
            <span class="visually-hidden text-black">Next</span>
        </button>
    </div>
</div>
@endsection
