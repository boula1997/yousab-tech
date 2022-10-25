<div class="services-bar">
    <h1 class="my-4">خدماتنا المميزة</h1>
    <!-- Services Section -->
    <div class="row">
      @foreach ($services as $service)
      <div class="col-lg-4 mb-4">
         <div class="card h-100">
            <h4 class="card-header">{{ $service->title }}</h4>
            <div class="card-img">
               <img class="img-fluid" src="{{ asset($service->image) }}" alt="" />
            </div>
            <div class="card-body">
               {!! $service->description   !!}
            </div>
            <div class="card-footer">
               <a href="#" class="btn btn-primary">تصفح الخدمة</a>
            </div>
         </div>
      </div>    
      @endforeach
    </div>
    <!-- /.row -->
</div>