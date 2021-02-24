@extends('User::layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-light">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        <form action="{{route('password.checkResetPasswordCode')}}" method="post">
                            @csrf
                            <input type="hidden" name="email" value="{{request()->email}}">
                            <div class="form-group">
                                <label for="" class="text-light">VerifyCode</label>
                                <input type="text" class="form-control" name="verify_code">
                            </div>
                            @error('verify_code')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <button type="submit" class="btn btn-success btn-block rounded-pill mt-3">ارسال</button>
                        </form>


                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                    class="btn btn-info btn-block rounded-pill mt-3">{{ __('ارسال مجدد کد') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('admin/admin.css')}}">
@endsection
