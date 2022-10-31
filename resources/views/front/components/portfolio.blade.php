<div class="services-bar">
    <!-- services Section -->
    <h2>سابقة الاعمال</h2>

    <div class="row">
       
            <div class="col-lg-4 mb-4">
                {{-- <div class="card h-100">
                    <h4 class="card-header">{{ $portfolio->title }}</h4> --}}
                    <div class="card-img">
                        @foreach ($portfolios as $portfolio)
                        <a href="{{ asset($portfolio->image) }}" data-lightbox="portfolio" data-title="{{ $portfolio->title }}"><img style="margin: 1%" class="img-fluid" src="{{ asset($portfolio->image) }}" alt="" /></a>
                        @endforeach
                    </div>
                    {{-- <div class="card-body">
                        {!! $portfolio->description !!}
                    </div> --}}
                    {{-- <div class="card-footer">
                        <a href="#" class="btn btn-primary">تصفح الخدمة</a>
                    </div> --}}
                {{-- </div> --}}
            </div>
    </div>
    <!-- /.row -->
</div>
