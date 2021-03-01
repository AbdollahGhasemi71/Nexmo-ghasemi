@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-end">
        <div class="col-12  mt-5 mr-5">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>title</th>
                    <th>body</th>
                    <th>skill</th>
                    <th>protted</th>
                    <th>value</th>
                    <th>update</th>
                    <th>delete</th>

                </tr>
                @forelse($skill as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->body,20)}}</td>

                        <td>{{$item->skill}}</td>
                        <td>{{$item->spotted}}</td>
                        <td>{{$item->value}}</td>
                                <td>
                            <a href="{{route('skill.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['skill.destroy',$item->id],'method'=>'delete']) !!}
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
            <a href="{{route('skill.create')}}" class="btn btn-primary">go to create skill</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
