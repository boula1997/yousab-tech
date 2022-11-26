@extends('admin.crud.Layouts.App')

@section('content')
    <div class="row">
        <div class="col-lg-12" style="margin-top: 3%">
            <div class="pull-right">
                <h2>اضف فيديوهات للمعرض</h2>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{route('videos.index')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{route('videos.store')}}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الاسم:</strong>
                    <input type="text" value="{{old('title')}}" name="title" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>الرابط:</strong>
                    <input type="text" value="{{old('youtube_link')}}" name="youtube_link" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">حفظ</button>
            </div>
        </div>

    </form>
@endsection