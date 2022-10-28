        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>سابقة الاعمال</h2>
            <div class="row">
                @foreach ($portfolios as $portfolio)
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <div class="card-img">
                                <a href="#">
                                    <img class="card-img-top" src="{{ $portfolio->image }}" alt="" />
                                    <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{ $portfolio->title }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
