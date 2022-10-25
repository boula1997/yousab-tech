<div class="about-main">
    <div class="row">
       <div class="col-lg-6">
          <h2>{{ $setting->title }}</h2>
          {!! $setting->description !!}
          <h3>مميزات شركتنا</h3>
          <ul>
             <li>أفضل أسعار تنسيق حدائق في الرياض</li>
             <li>خدمات تنسيق حدائق عالية الجودة</li>
             <li>اختبار تصميمات الحدائق قبل التركيب</li>
             <li>معاينة مجانية للحديقة والأعمال المطلوبة</li>
             <!-- <li>Quisque ac eros non ex hendrerit vehicula.</li> -->
          </ul>
          <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p> -->
       </div>
       <div class="col-lg-6">
          <img class="img-fluid rounded" src="{{ asset($setting->image) }}" alt="" />
       </div>
    </div>
    <!-- /.row -->
</div>