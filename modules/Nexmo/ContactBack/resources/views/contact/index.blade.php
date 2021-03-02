@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-end">
        <div class="col-12  mt-5 mr-5">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr>
                    <th>title</th>
                    <th>body</th>
                    <th>call</th>
                    <th>email</th>
                    <th>location</th>
                    <th>update</th>
                    <th>delete</th>

                </tr>
                @forelse($contact as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{\Illuminate\Support\Str::limit($item->body,20)}}</td>

                        <td>{{$item->call}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->location}}</td>
                                <td>
                            <a href="{{route('contact-backend.edit',$item->id)}}" class="btn btn-success">update</a>
                        </td>
                        <td>
                            {!! Form::open(['route'=>['contact-backend.destroy',$item->id],'method'=>'delete']) !!}
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
            <a href="{{route('contact-backend.create')}}" class="btn btn-primary">go to create contact</a>

        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
