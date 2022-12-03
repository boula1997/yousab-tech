<head>
    <style>
        footer {
            background: url('https://images.unsplash.com/photo-1497211419994-14ae40a3c7a3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&w=1000&q=80');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        footer ul li i:before {
            content: "\f099";
            color: white;
            left: 45px;
            position: absolute;
        }

        footer p i {
            padding-left: 5px
        }

        .footer-info {
            align-items: center;
            display: flex;
            justify-content: space-between;
        }

        @media (max-width: 991px) {

            .footer-info {
                display: block
            }

            .social_footer_ul {
                display: block;
                margin: 0;
                padding: 0;

            }
        }

    </style>
</head>

@include('front.components.whatsapp')

<footer class="text-center text-black" style="color: black !important">
    <div class="container bottom_border">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <h4 class="pt2">موقعنا</h4>
                <p class="mb10">شركة حدائق الفيروز</p>
                <p>تصميم وتنسيق الحدائق المنزلية تركيب شلالات ونوافير وديكورات تركيب العشب الصناعي حدائق وملاعب تركيب
                    العشب الطبيعي بأنواعه توريد وزراعة الأشجار والورود بجميع أنواعها وكل ما يخص الحدائق يوجد مصبات و
                    نوافير استيل تايواني بكل انواعها</p><br>
                <p><i class="fa fa-location-arrow"></i> {{ $setting->address }}</p>
                <p><i class="fa fa-phone"></i> {{ $setting->phone1 }} </p>
                <p><i class="fa fa fa-envelope"></i> {{ $setting->email1 }}</p>
            </div>
            <div class="col-md-3 col-sm-12">
                <h5 class="headin5_amrc col_white_amrc pt2">تابعنا علي</h5>
                <!--headin5_amrc ends here-->
                <ul class="footer_ul2_amrc">
                    <li>
                        <a href="{{ $setting->twitter }}" target="_blank"> <i
                                class="fab fa-twitter fleft padding-right"></i> </a>
                        <a href="{{ $setting->twitter }}" target="_blank">
                            <p>صفحتنا علي تويتر</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $setting->facebook }}" target="_blank"> <i
                                class="fab fa-facebook fleft padding-right"></i> </a>
                        <a href="{{ $setting->facebook }}" target="_blank">
                            <p>صفحتنا الرسمية علي فيسبوك</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $setting->youtube }}" target="_blank"> <i
                                class="fab fa-youtube fleft padding-right"></i> </a>
                        <a href="{{ $setting->youtube }}" target="_blank">
                            <p>قنانتنا علي اليوتيوب</p>
                        </a>
                    </li>


                </ul>
            </div>
            <div class="col-md-3 col-sm-12">
                <h5 class="headin5_amrc col_white_amrc pt2">روابط سريعة</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="{{ route('front.home') }}">الرئسية</a></li>
                    <!-- <li><a href="#">المقالات</a></li>
                    <li><a href="o">فريفنا</a></li> -->
                    <li><a href="{{ route('front.about') }}">من نحن؟</a></li>
                    <li><a href="{{ route('front.service') }}">خدماتنا</a></li>
                    <li><a href="{{ route('front.contact') }}">تواصل معنا</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-12">
                <h5 class="headin5_amrc col_white_amrc pt2">منشورات حديثة</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    @foreach ($blogs_footer as $blog_footer)
                    <li class="media">
                        <div class="media-left">
                            <img class="img-fluid" src="{{ asset($blog_footer->image) }}" alt="" />
                        </div>
                        <div class="media-body">
                            <a href="{{ route('front.blog', $blog_footer) }}">
                                <p>{{ $blog_footer->title }}</p>
                            </a>
                            <span>{{ $blog_footer->creared_at }}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container footer-info">
        <!--foote_bottom_ul_amrc ends here-->
        <p class="text-center">جميع الحقوق محفوظة &copy; 2022 <a class="text-white"
                href="{{ route('front.home') }}">شركة حدائق
                الفيروز</a>

        </p>
        <div class="footer-logo">
            <a href="{{ route('front.home') }}"><img width="150px" height="150px" src="{{ asset($setting->logo) }}"
                    alt="" /></a>
        </div>
        <ul class="social_footer_ul">
            <a class="px-3" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="px-3" href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="px-3" href="#"><i class="fab fa-linkedin"></i></a>
            <a class="px-3" href="{{ $setting->instgram }}" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="px-3" href="{{ $setting->youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="px-3" href="{{ $setting->tiktok }}" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
        </ul>
        <!--social_footer_ul ends hezre-->
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('public/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/site/js/lightbox.js') }}"></script>
<script>
    $("#contactForm").on("submit", function (e) {
        var dataString = $(this).serialize();
        $.ajax({
            type: "post",
            url: "{{ route('front.contact.post') }}",
            data: dataString,
            success: function () {
                $("#contactForm").html("<div id='message' style='text-align: center;'></div>");
                $("#message")
                    .html(
                        `<div  style="background: linear-gradient(90deg, rgba(92, 255, 92, 1) 0%, rgba(0, 163, 0, 1) 100%);" class="p-3 mb-2 rounded-5 text-center text-white">
                            <h2>تم ارسال رسالتك بنجاح!</h2>
                            <p>سيتم الرد عليك قريبا</p>
                        </div>`
                    )
                    .append("")
                    .hide()
                    .fadeIn(1500, function () {
                        $("#message").append(
                            // "<img id='checkmark' src='{{ asset($setting->logo) }}' />"
                        );
                    });
            }


        });

        e.preventDefault();
        return false;
    });

</script>
</body>


</html>
