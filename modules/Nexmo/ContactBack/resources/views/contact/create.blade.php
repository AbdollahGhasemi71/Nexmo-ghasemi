@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-5">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    create contact
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::open(['route' => 'contact-backend.store','method'=>'post','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('title','Title',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'
 pelase your enter title']) !!}
                        @error('title')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('body','body',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('body',old('body'),['class'=>'form-control','placeholder'=>'
 pelase your enter body']) !!}
                        @error('body')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('email','email',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('email',old('email'),['class'=>'form-control','placeholder'=>'
 pelase your enter email']) !!}
                        @error('email')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('call','call',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('call',old('protted'),['class'=>'form-control','placeholder'=>'
 pelase your enter call']) !!}
                        @error('call')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('location','location',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('location',old('protted'),['class'=>'form-control','placeholder'=>'
 pelase your enter location']) !!}
                        @error('location')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}

                    <a href="{{route('contact-backend.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
