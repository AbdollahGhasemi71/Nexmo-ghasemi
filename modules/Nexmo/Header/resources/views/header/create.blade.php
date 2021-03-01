@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-5">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    create header
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::open(['route' => 'header.store','method'=>'post','files'=>true]) !!}
                    <div class="form-group">
                        {!! Form::label('title','Title',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'
 pelase your enter title']) !!}
                        @error('title')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('instagram','instagram',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('instagram',old('instagram'),['class'=>'form-control','placeholder'=>'
 pelase your enter instagram']) !!}
                        @error('instagram')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('telegram','telegram',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('telegram',old('telegram'),['class'=>'form-control','placeholder'=>'
 pelase your enter telegram']) !!}
                        @error('telegram')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('linkedin','linkedin',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('linkedin',old('linkedin'),['class'=>'form-control','placeholder'=>'
 pelase your enter linkedin']) !!}
                        @error('linkedin')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('github','github',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('github',old('github'),['class'=>'form-control','placeholder'=>'
 pelase your enter github']) !!}
                        @error('github')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('image','image',['style'=>'font-weight:bold']) !!}
                        {!! Form::file('image',['class'=>'form-control','placeholder'=>'
 pelase your enter image']) !!}
                        @error('image')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('create',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}

                    <a href="{{route('header.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
