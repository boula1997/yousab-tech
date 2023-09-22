    <!-- how it work area start -->
    <div class="how-it-work-area bg-blue pd-top-110 pd-top-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title style-white text-center">
                        <h5 class="sub-title double-line">{{ page('process-section')->subtitle }}</h5>
                        <h2 class="title">{{ page('process-section')->title }}</h2>
                        <div class="content text-white">{!! page('process-section')->description !!}</div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($processes as $process)
                    
                <div class="col-lg-3 col-md-6">
                    <div class="single-work-inner style-two text-center">
                        <div class="count-wrap">
                            <div class="count-inner">
                                <h2>0{{ $loop->iteration }}</h2>
                            </div>
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h4>{{ $process->title }}</h4>
                                <p>{!! $process->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="client-slider pd-top-90 pd-bottom-110 owl-carousel" dir="ltr">
                <div class="item">
                    <div class="thumb text-center">
                        <img src="{{asset('assets/img/client/1.webp')}}" alt="img">
                    
                    </div>
                </div>
                <div class="item">
                    <div class="thumb text-center">
                        <img src="{{asset('assets/img/client/2.webp')}}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb text-center">
                        <img src="{{asset('assets/img/client/3.webp')}}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb text-center">
                        <img src="{{asset('assets/img/client/4.webp')}}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb text-center">
                        <img src="{{asset('assets/img/client/1.webp')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- how it work area end -->