    <!-- project area start -->
    <div class="project-area bg-black pd-top-115">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-7">
                    <div class="section-title style-white text-center">
                        <h5 class="sub-title double-line">{{ page('portfolio-section')->subtitle }}</h5>
                        <h2 class="title">{{ page('portfolio-section')->title }}</h2>
                        {!! page('portfolio-section')->description !!}
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($portfolios as $portfolio)
                    @foreach ($portfolio->images as $image)
                        <div class="swiper-slide" data-aos="zoom-in">
                            <div class="item">
                                <div class="single-project-inner style-two">
                                    <div class="thumb">
                                        <img src="{{ isset($image->url) ? $image->url : asset('default.jpg') }}"
                                            alt="img">
                                    </div>
                                    <div class="details-wrap">
                                        <h3><a
                                                href="#">{{ $portfolio->title }}</a>
                                        </h3>
                                        <p> {!! $portfolio->description !!} </p>
                                        <a href="project-details.html">{{ $portfolio->subtitle }}<i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    <!-- project area end -->
