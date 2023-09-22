    <!-- service area start -->
    <div class="service-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)

                    <div class="col-lg-4 col-md-6">
                        <div class="single-service-inner style-hover-base text-center">
                            <div class="icon-box">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <div class="details">
                                <h3><a href="{{route('front.show.service',$service->id)}}">{{$service->title}}</a></h3>
                                {!! $service->description !!}
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            
            </div>
        </div>
    </div>
    <!-- service area end -->