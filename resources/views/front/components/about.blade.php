<div class="about-main">
    <div class="row">
       <div class="col-lg-6">
          <h2>{{ $about_section->subtitle }}</h2>
          {!! $about_section->description !!}
          <h3>{{ $advantage_section->title }}</h3>
          <ul>
          {!! $advantage_section->description !!}
             <!-- <li>Quisque ac eros non ex hendrerit vehicula.</li> -->
          </ul>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p> -->
       </div>
       <div class="col-lg-6">
          <img class="img-fluid rounded" src="{{ asset($about_section->image) }}" alt="" />
       </div>
    </div>
    <!-- /.row -->
</div>