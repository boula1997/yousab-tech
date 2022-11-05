<header class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
           @foreach ($sliders as $slider)
           <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="{{$loop->index < 1 ? 'active' : ''}}"></li>
           @endforeach
        </ol>

        <div class="carousel-inner" role="listbox">
           <!-- Slide One - Set the background image for this slide in the line below -->
 
           @foreach ($sliders as $slider)
           <div class="carousel-item {{$loop->index==0?'active':''}}" style="background-image: url('{{asset($slider->image)}}')">
                <div class="carousel-caption d-md-block" >
                    <div class="row">
                        <div class="col-md-1">
                            <ul class="social_footer_ul">
                                <li style="margin-bottom: 100%"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li style="margin-bottom: 100%"><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li style="margin-bottom: 100%"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="{{ $setting->instgram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-10" style="padding-top: 50%">
                            <h3>{{$slider->title}}</h3>
                            {!! $slider->description  !!}
                        </div>
                        <div class="col-md-1">
                            <ul class="social_footer_ul">
                                <li style="margin-bottom: 100%"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li style="margin-bottom: 100%"><a href="{{ $setting->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li style="margin-bottom: 100%"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li ><a href="{{ $setting->instgram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>          
           </div>
        @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">السابق</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">التالي</span>
        </a>
    </div>
</header>