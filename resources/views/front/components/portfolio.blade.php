<div class="services-bar">
    <!-- services Section -->
    <h2>سابقة الاعمال</h2>

    <div class="row">
        @foreach ($portfolios as $portfolio)
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">{{ $portfolio->title }}</h4>
                    <div class="card-img">
                        <img class="img-fluid" src="{{ asset($portfolio->image) }}" alt="" />
                    </div>
                    <div class="card-body">
                        {!! $portfolio->description !!}
                    </div>
                    {{-- <div class="card-footer">
                        <a href="#" class="btn btn-primary">تصفح الخدمة</a>
                    </div> --}}
                </div>
            </div>
        @endforeach
    </div>
    <!-- /.row -->
</div>
