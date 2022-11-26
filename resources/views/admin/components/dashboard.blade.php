<div id="page-inner">
    <div class="row">
        <div class="col-lg-12">
            <h1 style="text-align: center">لوحة التحكم</h1>
        </div>
    </div>
    <!-- /. ROW  -->
    <hr />
    <div class="row">
        <div class="col-lg-12 ">
            <div class="alert alert-info">
                <strong>اكتشف المزيد من التعديلات </strong> {{ auth()->user()->name }} مرحبا بك
            </div>

        </div>
    </div>
    <!-- /. ROW  -->
    <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('portfolios.index') }}">
                    <i class="fa fa-picture-o fa-5x"></i>
                    <a href="{{ route('portfolios.index') }}">
                        <h4>سابقة الاعمال</h4>
                    </a>
                </a>
            </div>


        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('services.index') }}">
                    <i class="fa fa-envelope-o fa-5x"></i>
                    <h4>الخدمات</h4>
                </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('blogs.index') }}">
                    <i class="fa fa-lightbulb-o fa-5x"></i>
                    <a href="{{ route('blogs.index') }}">
                        <h4>المقالات</h4>
                    </a>
                </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('sliders.index') }}">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>شرائح العرض</h4>
                </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('edit.setting') }}">
                    <i class="fa fa-cogs fa-5x"></i>
                    <h4>الاعددات </h4>
                </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('pages.index') }}">
                    <i class="fa fa-comments-o fa-5x"></i>
                    <h4>الصفحات</h4>
                </a>
            </div>


        </div>
    </div>
    <div class="row text-center pad-top">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('videos.index') }}">
                    <i class="fa fa-picture-o fa-5x"></i>
                    <a href="{{ route('videos.index') }}">
                        <h4>الفيديوهات</h4>
                    </a>
                </a>
            </div>


        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('counters.index') }}">
                    <i class="fa fa-envelope-o fa-5x"></i>
                    <h4>العداد</h4>
                </a>
            </div>


        </div>
        {{-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('blogs.index') }}">
                    <i class="fa fa-lightbulb-o fa-5x"></i>
                    <a href="{{ route('blogs.index') }}">
                        <h4>المقالات</h4>
                    </a>
                </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('sliders.index') }}">
                    <i class="fa fa-users fa-5x"></i>
                    <h4>شرائح العرض</h4>
                </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('edit.setting') }}">
                    <i class="fa fa-cogs fa-5x"></i>
                    <h4>الاعددات </h4>
                </a>
            </div>


        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <div class="div-square">
                <a href="{{ route('pages.index') }}">
                    <i class="fa fa-comments-o fa-5x"></i>
                    <h4>الصفحات</h4>
                </a>
            </div>


        </div> --}}
    </div>

</div>
<!-- /. PAGE INNER  -->
<!-- /. PAGE WRAPPER  -->
