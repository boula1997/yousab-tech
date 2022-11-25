@extends('admin.crud.Layouts.App')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2 style="text-align: center">لوحة التحكم</h2>
            </div>
            <div class="pull-left">
                <a class="btn btn-primary" href="{{route('dashboard')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('sliders.create')}}" title="Create a slider"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p style="text-align: end">{{$message}} </p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg" style="text-align: center">
        <tr>
            <th>رقم</th>
            <th>الاسم</th>
            <th>تاريخ النشاء</th>
            <th>التحكم</th>
        </tr>
        @foreach ($sliders as $slider)
            <tr>
                <td>#{{$loop->iteration}}</td>
                <td>{{$slider->title}}</td>
                <td>{{$slider->created_at}}</td>
                <td style="width: 11%">
                    <form action="{{route('sliders.destroy',$slider)}}" method="POST">

                        <a href="{{route('sliders.show',$slider)}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{route('sliders.edit',$slider)}}" title="edit">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf   
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{-- {!! $sliders->links() !!} --}}


@endsection