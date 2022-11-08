@extends('admin.crud.Layouts.App')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2 style="text-align: center">لوحة التحكم</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('tests.create')}}" title="Create a image"> <i class="fas fa-plus-circle"></i>
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
            <th>الصورة</th>
            <th>تاريخ النشاء</th>
            <th>التحكم</th>
        </tr>
        @foreach ($tests as $test)
            <tr>
                <td>#{{$loop->iteration}}</td>
                <td><img width="10%" height="10%" src="{{asset($test->image)}}" alt=""></td>
                <td>{{$test->created_at}}</td>
                <td style="width: 11%">
                    <form action="{{route('tests.destroy',$test)}}" method="POST">

                        <a href="{{route('tests.show',$test)}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{route('tests.edit',$test)}}" title="edit">
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

    {{-- {!! $images->links() !!} --}}


@endsection