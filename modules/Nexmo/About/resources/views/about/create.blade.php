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
                    {!! Form::open(['route' => 'about.store','method'=>'post','files'=>true]) !!}
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
                        {!! Form::label('job','job',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('job',old('job'),['class'=>'form-control','placeholder'=>'
 pelase your enter job']) !!}
                        @error('job')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('birthday','birthday',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('birthday',old('birthday'),['class'=>'form-control','placeholder'=>'
 pelase your enter birthday']) !!}
                        @error('birthday')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('website','website',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('website',old('website'),['class'=>'form-control','placeholder'=>'
 pelase your enter website']) !!}
                        @error('website')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone','phone',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('phone',old('phone'),['class'=>'form-control','placeholder'=>'
 pelase your enter phone']) !!}
                        @error('phone')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('city','city',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('city',old('city'),['class'=>'form-control','placeholder'=>'
 pelase your enter city']) !!}
                        @error('city')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        {!! Form::label('age','age',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('age',old('age'),['class'=>'form-control','placeholder'=>'
 pelase your enter age']) !!}
                        @error('age')
                        <p class="text-left text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        {!! Form::label('degree','degree',['style'=>'font-weight:bold']) !!}
                        {!! Form::text('degree',old('degree'),['class'=>'form-control','placeholder'=>'
 pelase your enter degree']) !!}
                        @error('degree')
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
                        {!! Form::label('description','description',['style'=>'font-weight:bold']) !!}
                        {!! Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'
 pelase your enter description']) !!}
                        @error('description')
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

                    <a href="{{route('about.index')}}" class="btn btn-info">go to panel index</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
