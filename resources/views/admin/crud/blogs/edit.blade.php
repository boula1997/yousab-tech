@extends('admin.crud.Layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 3%">
            <div class="pull-right">
                <h2>اضف صور للمعرض</h2>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{route('blogs.index')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>اخطاء!</strong> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li></li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('blogs.store')}}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الاسم:</strong>
                    <input type="text" value="{{old('title',$data->title)}}" name="title" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الوصف:</strong>
                    <textarea class="form-control" style="height:30%" name="description"
                      >{{old('description',$data->description)}}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group" style="text-align: center">
                                    <label class="col-form-label" style="font-size: 15pt"> <strong> اختر الصور</strong></label>
                                    @include('admin.components.image_arr_edit')
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