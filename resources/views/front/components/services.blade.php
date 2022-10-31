        <!-- Portfolio Section -->
        <h1 class="my-4">خدماتنا المميزة</h1>

        <div class="portfolio-main">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <div class="card-img">
                                <a href="#">
                                    <img class="card-img-top" src="{{ asset($service->image) }}" alt="" />
                                    <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                </a>
                            </div>
                            <br>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{ $service->title }}</a>
                                </h4>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('services.show',$service) }}" class="btn btn-primary">تصفح الخدمة</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
