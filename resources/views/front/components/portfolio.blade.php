<div class="services-bar">
    <!-- services Section -->
    <h2>{{ $portfolio->title }}</h2>

    <div class="row">
       
        @foreach ($images as $image)
            <div class="col-lg-4">
                <div class="card">
                        <a href="{{ asset('images/'.$image) }}" data-lightbox="portfolio" data-title="{{ $portfolio->title }}"><img style="margin: 1%" class="img-fluid" src="{{ asset('images/'.$image) }}" alt="" /></a>
                </div>
            </div>
            @endforeach
    </div>
    <!-- /.row -->
</div>