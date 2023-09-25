    <!-- project area start -->
    <div class="project-area bg-black pd-top-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title style-white text-center">
                        <h5 class="sub-title double-line">{{ page('portfolio-section')->subtitle }}</h5>
                        <h2 class="title">{{ page('portfolio-section')->title }}</h2>
                        {!! page('portfolio-section')->description !!}
                    </div>
                </div>
            </div>
            
        </div>
        <div class="project-slider-2 slider-control-square owl-carousel" dir="ltr">
            @foreach ($portfolios as $portfolio)  
                <div class="item">
                    <div class="single-project-inner style-two">
                        <div class="thumb">
                            <img src="{{isset($portfolio->images[0]->url)?$portfolio->images[0]->url:$portfolio->images[0]}}" alt="img">
                        </div>
                        <div class="details-wrap">
                            <h3><a href="project-details.html">{{$portfolio->title}}</a></h3>
                            <p> {{$portfolio->description }} <p>
                            <a href="project-details.html">{{$portfolio->subtitle}}<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- project area end -->
