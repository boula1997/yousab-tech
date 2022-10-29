<header class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
           <!-- Slide One - Set the background image for this slide in the line below -->
           @foreach ($sliders as $slider)
           <div class="carousel-item {{$slider->id==1?'active':''}}" style="background-image: url('{{asset($slider->image)}}')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>{{$slider->title}}</h3>
                    {!! $slider->description  !!}
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