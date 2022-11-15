<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">موقعنا</h5>
                <!--headin5_amrc-->
                <p class="mb10">شركة حدائق الفيروز</p>
                <p>تصميم وتنسيق الحدائق المنزلية تركيب شلالات ونوافير وديكورات تركيب العشب الصناعي حدائق وملاعب تركيب العشب الطبيعي بأنواعه توريد وزراعة الأشجار والورود بجميع أنواعها وكل ما يخص الحدائق يوجد مصبات و نوافير استيل تايواني 304بكل انواعها</p><br>
                <p><i class="fa fa-location-arrow"></i> {{ $setting->address }}</p>
                <p><i class="fa fa-phone"></i> {{ $setting->phone1 }} </p>
                <p><i class="fa fa fa-envelope"></i> {{ $setting->email1 }}</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col">
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
                <!--footer_ul2_amrc ends here-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
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
                <!--footer_ul_amrc ends here-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 ">
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
                <!--footer_ul_amrc ends here-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-logo">
            <a href="{{ route('front.home') }}"><img width="150px" height="150px" src="{{ asset($setting->logo) }}"
                    alt="" /></a>
        </div>
        <!--foote_bottom_ul_amrc ends here-->
        <p class="copyright text-center">جميع الحقوق محفوظة &copy; 2022 <a href="{{ route('front.home') }}">شركة جدائق الفيروز</a>
        
        </p>
        <ul class="social_footer_ul">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="{{ $setting->instgram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <!--social_footer_ul ends hezre-->
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('site/js/lightbox.js') }}"></script>
<script>
    $("#contactForm").on("submit", function(e) {
        var dataString = $(this).serialize();
        $.ajax({
            type: "post",
            url: "{{ route('front.contact.post') }}",
            data: dataString,
            success: function() {
                $("#contactForm").html("<div id='message' style='text-align: center;'></div>");
                $("#message")
                    .html(
                        "<h2 style='background-color:green; color:white; text-align: center;'>تم ارسال رسالتك بنجاح!</h2>"
                        )
                    .append("<p>سيتم الرد عليك قريبا</p>")
                    .hide()
                    .fadeIn(1500, function() {
                        $("#message").append(
                            "<img id='checkmark' src='{{ asset($setting->logo) }}' />"
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
