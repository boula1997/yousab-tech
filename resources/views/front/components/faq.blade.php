    <!-- faq area start -->
    <div class="faq-area pd-top-100 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 order-lg-last mb-4 mb-lg-0">
                    <div class="faq-image-wrap">
                        <div class="thumb">

                            {{-- <img src="{{ asset( page('faq')->image) }}" alt="img"> --}}
                            
                            <img src="{{asset('assets/img/about/f1.webp')}}" alt="img">
                            {{-- <img class="img-position-1" src="{{asset('assets/img/about/f2.webp')}}" alt="img"> --}}
                            {{-- <img class="img-position-2 top_image_bounce" src="{{asset('assets/img/about/f3.webp')}}" alt="img"> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-xl-5 order-lg-first align-self-center">
                    <div class="section-title mb-0">
                        <h5 class="sub-title right-line">{{ page('faq-section')->title }}</h5>
                        <h2 class="title">{{ page('faq-section')->subtitle }}</h2>
                        {!! page('faq-section')->description !!}
                    </div>
                    
                    @foreach ($fags as $fag)
                        <div class="accordion mt-4" id="accordionExample">
                            <div class="accordion-item single-accordion-inner">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{$fag->title}}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $fag->description !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                     @endforeach
                       
                        {{-- <div class="accordion-item single-accordion-inner">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What we do for you?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                                    adipiscingem neque sed ipsum. amquam nunc
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item single-accordion-inner mb-0">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    100% data security
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                                    adipiscingem neque sed ipsum. amquam nunc
                                </div>
                            </div>
                        </div> --}}
                        {{-- @dd($settings) --}}
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->