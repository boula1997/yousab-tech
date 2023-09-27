    <!-- faq area start -->
    <div class="faq-area pd-top-100 pd-bottom-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 order-lg-last mb-4 mb-lg-0">
                    <div class="faq-image-wrap">
                        <div class="thumb">

                            {{-- <img src="{{ asset( page('faq')->images[0]) }}" alt="img"> --}}
                            
                            <img src="{{ asset(file_exists(page('faq-section')->images[0]->url) ? page('faq-section')->images[0]->url : asset('default.jpg')) }}" alt="img">
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
                    
                  
                    <div class="accordion mt-4" id="accordionExample">
                        
                            @foreach ($faqs as $faq)
                        
                            <div class="accordion-item single-accordion-inner">
                                <h2 class="accordion-header" id="headingOne{{$loop->index}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne{{$loop->index}}" aria-expanded="true" aria-controls="collapseOne{{$loop->index}}">
                                        {{$faq->title}}
                                    </button>
                                </h2>
                                <div id="collapseOne{{$loop->index}}" class="accordion-collapse collapse show" aria-labelledby="headingOne{{$loop->index}}"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {!! $faq->description !!}
                                    </div>
                                </div>
                            </div>
                        
                        
                            @endforeach
                    </div> 
                       
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