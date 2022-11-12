        <!-- Portfolio Section -->
        <h1 class="my-4">خدماتنا المميزة</h1>

        <div class="portfolio-main">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-sm-6 portfolio-item">
                        <div class="card h-100">
                            <div class="card-img">
                                <a href="#">
                                    <a href="{{ route('front.show.service',['id'=>$service->id]) }} "><img class="card-img-top" width="300px" height="300px" src="{{ asset($service->image) }}" alt="{{ $service->title }}"/></a>
                                    <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#">{{ $service->title }}</a>
                                </h4>
                            </div>
                            <div class="card-footer">
                                <a href="tel:00966500774150" class="btn btn-primary">اتصل بنا <i class="fas fa-phone-square"></i></a>
                                <a href="{{ route('front.show.service',['id'=>$service->id]) }}" class="btn btn-primary">تصفح الخدمة</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
