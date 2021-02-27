@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-end">
        <div class="col-12  mt-5 mr-5">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>title</th>
                    <th>body</th>
                    <th>image</th>
                    <th>job</th>
                    <th>birthday</th>
                    <th>website</th>
                    <th>phone</th>
                    <th>city</th>
                    <th>age</th>
                    <th>degree</th>
                    <th>email</th>
                    <th>description</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @forelse($about as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->body,20)}}</td>
                        <td>
                            <img src="{{asset('images/about/'.$item->image)}}" height="50" width="50">
                        </td>
                        <td>{{$item->job}}</td>
                        <td>{{$item->birthday}}</td>
                        <td>{{$item->website}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->city}}</td>
                        <td>{{$item->age}}</td>
                        <td>{{$item->degree}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->description,20)}}</td>

                        <td>
                            <a href="{{route('about.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['about.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="16">
                            <h4 class="bg-success text-center">no Data</h4>
                        </td>
                    </tr>
                @endforelse
            </table>
            <a href="{{route('about.create')}}" class="btn btn-primary">go to create about</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
