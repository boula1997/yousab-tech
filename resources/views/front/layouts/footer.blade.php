<!-- footer area start -->
<footer class="footer-area bg-black bg-cover" style="background-image: url({{ asset('./assets/img/bg/2.webp') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_about">
                    <h4 class="widget-title">{{ __('general.about') }}</h4>
                    <div class="details">
                        <p>{{ __('general.address') }}</p>
                        {{-- <p>Melbourne’s GPO 434 VIC 3074, Australia.</p> --}}
                        {{-- {{settings()->address}} --}}
                        <p>{{ settings()->translate(app()->getLocale())->address }}</p>
                        <ul class="social-media">
                            <li>
                                <a class="facebook" href="{{ settings()->facebook }}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a class="twitter" href="{{ settings()->twitter }}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class="instagram" href="{{ settings()->instgram }}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a class="youtube" href="{{ settings()->youtube }}">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">{{ __('general.services') }}</h4>
                    <ul>
                        @foreach (services() as $service)
                            <li><a href="{{ route('front.show.service', $service->id) }}">{{ $service->title }}</a></li>
                        @endforeach

                        {{-- <li><a href="service.html">Digital marketing </a></li>
                            <li><a href="service.html">It management</a></li>
                            <li><a href="service.html">Cloud services</a></li>
                            <li><a href="service.html">Machine learning</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_nav_menu">
                    <h4 class="widget-title">{{ __('general.useful_link') }}</h4>
                    <ul>
                        <li><a href="{{ route('front.about') }}">{{ __('general.about') }}</a></li>
                        {{-- <li><a href="team.html">{{__('general.team')}}</a></li>
                            <li><a href="project.html">{{__('general.portfolio')}}</a></li> --}}
                        <li><a href="{{ route('front.service') }}">{{ __('general.services') }}</a></li>
                        <li><a href="{{ route('front.message') }}">{{ __('general.contact_us') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="widget widget_subscribe d-block">
                    <h4 class="widget-title">{{ __('general.subscrip_now') }}</h4>
                    <div class="single-input-inner style-border style-bg-none">
                        <input type="text" placeholder="{{ __('general.your_email') }}">
                        <button><i class="fa fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center">
                    <p>{{ settings()->copyright }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->

@include('front.components.whatsapp')

<!-- all plugins here -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/js/imageload.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/tweenmax.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoint.js') }}"></script>
<script src="{{ asset('assets/js/counterup.js') }}"></script>
<!-- Swiper JS - V10.2.0 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js"
    integrity="sha512-k2o1KZdvUi59PUXirfThShW9Gdwtk+jVYum6t7RmyCNAVyF9ozijFpvLEWmpgqkHuqSWpflsLf5+PEW6Lxy/wA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        }
    });
</script>

<!-- main js  -->
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('js')
</body>

</html>
