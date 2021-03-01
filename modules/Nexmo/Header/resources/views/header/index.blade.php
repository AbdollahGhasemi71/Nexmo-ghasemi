@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-12  mt-5  ml-0 mr-0">
            <table class="table table-dark table-hover table-responsive-lg">
                @include('Message::message.message')
                <tr>
                    <th>title</th>
                    <th>telegram</th>
                    <th>instagram</th>
                    <th>linkedin</th>
                    <th>GitHub</th>
                    <th>image</th>
                    <th>update</th>
                    <th>delete</th>
                </tr>
                @forelse($header as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->telegram}}</td>
                        <td>{{$item->instagram}}</td>
                        <td>{{$item->linkedin}}</td>
                        <td>{{$item->github}}</td>
                        <td>
                            <img src="{{asset('images/header/'.$item->image)}}" height="50" width="50">
                        </td>
                        <td>
                            <a href="{{route('header.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['header.destroy',$item->id],'method'=>'delete']) !!}
                            {!! Form::submit('delete',['class'=>'btn btn-warning']) !!}
                            {!! Form::close() !!}
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <h4 class="bg-success text-center">no Data</h4>
                        </td>
                    </tr>
                @endforelse
            </table>
            <a href="{{route('header.create')}}" class="btn btn-primary btn-block">go to create header</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
