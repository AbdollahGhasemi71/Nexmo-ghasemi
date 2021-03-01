@extends('Admin::admin.layout.master')

@section('content')
    <div class="row justify-content-end">
        <div class="col-12  mt-5 mr-5">
            <table class="table table-dark table-hover">
                @include('Message::message.message')
                <tr class="text-center">
                    <th>fullname</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message</th>
                    <th>delete</th>
                </tr>
                @forelse($contact as $item)
                    <tr class="text-center">
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->subject}}</td>
                        <td>{{$item->message}}</td>
                        <td>
                            {!! Form::open(['route'=>['contact.destroy',$item->id],'method'=>'delete']) !!}
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
        </div>
    </div>
@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
