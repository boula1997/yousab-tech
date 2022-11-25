@extends('admin.crud.Layouts.App')

@section('content')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 3%">
            <div class="pull-right">
                <h2>اضف صور للمعرض</h2>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{route('dashboard')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>اخطاء!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('setting')}}" method="POST"  >
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>العنوان:</strong>
                    <input type="text" value="{{old('address',$setting->address)}}" name="address" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الخريطة:</strong>
                    <input type="text" value="{{old('map',$setting->map)}}" name="map" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>فيسبوك:</strong>
                    <input type="text" value="{{old('facebook',$setting->facebook)}}" name="facebook" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>تويتر:</strong>
                    <input type="text" value="{{old('twitter',$setting->twitter)}}" name="twitter" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>يوتيوب:</strong>
                    <input type="text" value="{{old('youtube',$setting->youtube)}}" name="youtube" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>تيك توك:</strong>
                    <input type="text" value="{{old('tiktok',$setting->tiktok)}}" name="tiktok" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> انستجرام:</strong>
                    <input type="text" value="{{old('instgram',$setting->instgram)}}" name="instgram" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> رقم الهاتف الاول:</strong>
                    <input type="text" value="{{old('phone1',$setting->phone1)}}" name="phone1" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> رقم الهاتف الثاني:</strong>
                    <input type="text" value="{{old('phone2',$setting->phone2)}}" name="phone2" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> رقم الهاتف الثالث:</strong>
                    <input type="text" value="{{old('phone3',$setting->phone3)}}" name="phone3" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>  البريد الالكتروني الاول :</strong>
                    <input type="text" value="{{old('email1',$setting->email1)}}" name="email1" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> البريد الالكتروني الثاني:</strong>
                    <input type="text" value="{{old('email2',$setting->email2)}}" name="email2" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>   معاد العمل الاول:</strong>
                    <input type="text" value="{{old('appointment1',$setting->appointment1)}}" name="appointment1" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong> معاد العمل الثاني:</strong>
                    <input type="text" value="{{old('appointment2',$setting->appointment2)}}" name="appointment2" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الوصف:</strong>
                    <textarea class="form-control" style="height:30%" name="description"
                      >{{old('description',$setting->description)}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" style="text-align: center">
                                    <img height="20%" src="{{asset($setting->logo)}}" alt="">
                                    <label class="col-form-label" style="font-size: 15pt"> <strong> اللوجو</strong></label>
                                    <div class="image-input image-input-empty image-input-outline" id="kt_image_5">
                                        <div class="image-input-wrapper"></div>
                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="logo" accept=".png, .jpg, .jpeg, .svg" />
                                            <input type="hidden" name="profile_avatar_remove" />
                                        </label>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                </div>            
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" style="text-align: center">
                                    <img height="20%" src="{{asset($setting->logo)}}" alt="">
                                    <label class="col-form-label" style="font-size: 15pt"> <strong> التاب</strong></label>
                                    <div class="image-input image-input-empty image-input-outline" id="kt_image_5">
                                        <div class="image-input-wrapper"></div>
                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="tab" accept=".png, .jpg, .jpeg, .svg" />
                                            <input type="hidden" name="profile_avatar_remove" />
                                        </label>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
             
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">حفظ</button>
            </div>
        </div>

    </form>
@endsection