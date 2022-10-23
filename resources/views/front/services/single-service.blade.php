@extends('front.layouts.master')
@section('content')
    <!-- full Title -->
    <div class="full-title">
        <div class="container">
            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Service name
                <small>Subheading</small>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="breadcrumb-main">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">الرئسية</a>
                </li>
                <li class="breadcrumb-item active">Service name</li>
            </ol>
        </div>

    </div>
    <div class="about-main">
        <div class="row">
           <div class="col-lg-6">
            //here will be service single
              <h2>مرحبا بكم في موقع زهرة البستان</h2>
              <p>شركة زهرة البستان شركة رائدة في مجال تنسيق الحدائق منذ أكثر من 10أعوام حيث أثبتت جدارتها في جميع  </p>
              <p>أنحاء المملكة بالخدمات التي تقدمها  حيث انها تمتلك فريق عمل مدرب من الأداريين والمهندسين والمصممين!</p>
              <p>والفنين والعمال علي أعلي مستوي لتنفيذ أصعب مشاريع تنسيق حدائق الفلل  والقصور وجميع أعمال اللأند سكيب</p>
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
              <img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
           </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
