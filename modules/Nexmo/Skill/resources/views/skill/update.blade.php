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
                    {!! Form::model($skill,['route' => ['skill.update',$skill->id],'method'=>'put','files'=>true]) !!}
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
                        {!! Form::label('skill','skill',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('skill',old('skill'),['class'=>'form-control','placeholder'=>'
 pelase your enter skill']) !!}
                        @error('skill')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('spotted','spotted',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('spotted',old('protted'),['class'=>'form-control','placeholder'=>'
 pelase your enter spotted']) !!}
                        @error('spotted')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('value','value',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('value',old('protted'),['class'=>'form-control','placeholder'=>'
 pelase your enter value']) !!}
                        @error('spotted')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('update',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}

                    <a href="{{route('skill.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
