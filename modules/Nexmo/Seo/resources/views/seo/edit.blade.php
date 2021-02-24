@extends('Admin::admin.layout.master')

@section('content')
    <div class="row  m-0">
        <div class="col-8 offset-2 mt-5">
            <div class="card bg-light">
                <div class="card-header bg-dark text-light">
                    edit seo
                </div>
                <div class="card-body bg-light">
                    @include('Message::message.message')
                    {!! Form::model($seo,['route' => ['seo.update',$seo->id],'method'=>'put']) !!}
                    <div class="form-group">
                        {!! Form::label('title','Title',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'
 pelase your enter title']) !!}
                        @error('title')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('keywords','keywords',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('keywords',old('keywords'),['class'=>'form-control','placeholder'=>'
 pelase your enter keywords','style'=>'height:150px']) !!}
                        @error('keywords')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('description','description',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'
 pelase your enter description','style'=>'height:150px']) !!}
                        @error('description')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('author','author',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('author',old('author'),['class'=>'form-control','placeholder'=>'
 pelase your enter author']) !!}
                        @error('author')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::submit('update',['class'=>'btn btn-success btn-block']) !!}
                    </div>
                    {!! Form::close() !!}

                    <a href="{{route('seo.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
