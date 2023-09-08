    <!-- banner area start -->
    <div class="banner-area banner-area-1 bg-black bg-relative">
        <div class="banner-bg-img" style="background-image: url('./assets/img/banner/2.webp');"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-7 text-center text-lg-end order-lg-last">
                    <div class="banner-mask-bg-wrap mb-5 mb-lg-0">
                        <img class="shape-image" src="{{asset('assets/img/banner/6.webp')}}" alt="img">
                        <div class="thumb">
                            <img src="{{asset(page('home-banner')->file->url)}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 order-lg-first align-self-center">
                    <div class="banner-inner style-white  text-center text-lg-start">
                        <h4 class="sub-title">{{page('home-banner')->title}}</h4>
                        <h2 class="title">{{page('home-banner')->subtitle}}</h2>
                        <p class="content">{!! page('home-banner')->description !!}</p>
                        <div class="btn-wrap">
                            <a class="btn btn-base me-2" href="blog.html">Get Started</a>
                            <a class="btn btn-border-white" href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->