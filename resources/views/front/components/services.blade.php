<div class="services-bar">
    <!-- services Section -->
    <h2>المقالات</h2>

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
               <a href="{{route('services.show',$service)}}" class="btn btn-primary">تصفح الخدمة</a>
            </div>
         </div>
      </div>    
      @endforeach
    </div>
    <!-- /.row -->
</div>