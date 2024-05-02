    <!-- portfolio area start -->
    <div class="service-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row">
                @foreach ($portfolios as $portfolio)

                <div class="col-lg-4 col-md-6">
                    <div class="single-team-inner style-4 text-center">
                        <div class="thumb">
                            <img src="{{ $portfolio->image }}" alt="img">
                        </div>
                        <div class="details-wrap">
                            <div class="details-inner">
                                <h4><a href="team-details.html">{{ $portfolio->title }}</a></h4>
                                <p>{{ $portfolio->title }}</p>
                                <button class="btn btn-outline-primary">Show</button>
                            </div>
                        </div>
                    </div>
                </div>
                    
                @endforeach
            
            </div>
        </div>
    </div>
    <!-- service area end -->