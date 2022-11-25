<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Amiri', serif;
            font-size: 20px;
        }

        .about-main p {
            font-size: 18px;
        }

        .about-main ul li:before {
            position: absolute;
            left: 505px;
            top: 0px;
            transform: rotateY(180deg);
            color: #4eae3a;
        }

        .about-main .image-box {
            height: 450px;
            width: 450px;
            overflow: hidden;
        }

        .about-main .image-box img {
            height: 100%;
            width: 100%;
            transition: all 0.3s ease-in-out;
        }

        .about-main .image-box img:hover {
            transform: scale(1.1);
            transition: all 0.3s ease-in-out;
        }

        @media (max-width: 991px) {

            .about-main ul li:before {
            position: absolute;
            left: 345px;
            top: 0px;
            transform: rotateY(180deg);
            color: #4eae3a;
        }
        }

    </style>
</head>

<div class="about-main">
    <div class="row">
        <div class="col-lg-6">
            <h2 style="color: #00A300">{{ $about_section->subtitle }}</h2>
            {!! $about_section->description !!}
            <h3 class="pt-3" style="color: #00A300">{{ $advantage_section->title }}</h3>
            <ul>
                {!! $advantage_section->description !!}
                <!-- <li>Quisque ac eros non ex hendrerit vehicula.</li> -->
            </ul>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p> -->
        </div>
        <div class="col-lg-6 image-box">
            <img class="img-fluid rounded" src="{{ asset($about_section->image) }}" alt="" />
        </div>
    </div>
    <!-- /.row -->
</div>
