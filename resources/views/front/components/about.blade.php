    <!-- about area start -->
    <div class="about-area pd-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="about-mask-bg-wrap about-mask-bg-wrap-1 mb-4 mb-lg-0">
                        <img class="shape-image-sm top_image_bounce" src="{{ asset('assets/img/about/1sm.webp') }}"
                            alt="img">
                        <img class="shape-image" src="{{ asset('assets/img/about/1s.webp') }}" alt="img">
                        <div class="thumb">
                            <img src="{{ asset(page('about-us')->file->url) }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="section-title px-lg-5 mb-0">
                        <h5 class="sub-title right-line">{{ page('about-us')->title }}</h5>
                        <h2 class="title">{{ page('about-us')->subtitle }}</h2>
                        {!! page('about-us')->description !!}
                        <div class="exp-wrap mt-3">
                            <div class="row">
                                @foreach ($counters as $counter)
                                    <div class="col-sm-4">
                                        <div class="single-exp-inner">
                                            <h2><span class="counter">{{$counter->count}}</span> <sub>Y</sub></h2>
                                            <h5>{{$counter->title}}</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->
