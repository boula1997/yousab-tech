    <!-- service area start -->
    <div class="service-area bg-overlay pd-top-120 pd-bottom-90"
        style="background-image: url('./assets/img/bg/3.webp');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-title border-radius-5 p-35 bg-base style-white mb-lg-0">
                        <h2 class="title mt-4">{{page('service-section')->title}}</h2>
                             <div class="text-white">{!! page('service-section')->description !!}</div>
                             
                        <div class="btn-wrap mt-4 pt-1 mb-4">
                            <a class="btn btn-small btn-border-white mt-2" href="message.html">{{__('general.message')}}</a>
                            <a class="btn btn-small btn-black mt-2" href="service.html">{{__('general.all_services')}}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($services as $service)
                            
                        <div class="col-md-6">
                            <div class="single-service-inner style-white text-center">
                                <div class="icon-box">
                                    <i class="icomoon-layer"></i>
                                </div>
                                <div class="details">
                                    <h3><a href="service-details.html">{{$service->title}}</a></h3>
                                      {!! $service->description !!}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->