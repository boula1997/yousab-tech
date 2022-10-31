<div class="blogs-bar">
    <!-- blogs Section -->
    <h2>المقالات</h2>

    <div class="row">
      @foreach ($blogs as $blog)
      <div class="col-lg-4 mb-4">
         <div class="card h-100">
            <h4 class="card-header">{{ $blog->title }}</h4>
            <div class="card-img">
               <img class="img-fluid" src="{{ asset($blog->image) }}" alt="" />
            </div>
            <div class="card-body">
               {!! $blog->description   !!}
            </div>
            <div class="card-footer">
               <a href="{{route('blogs.show',$blog)}}" class="btn btn-primary">تصفح الخدمة</a>
            </div>
         </div>
      </div>    
      @endforeach
    </div>
    <!-- /.row -->
</div>