@extends('layouts.site')

@section('content')
<section class="ftco-section" style="background-color: #afaea0;">
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="form-box">
                    <div class="img" style="background-image: url('/assets/images/bg-1.jpg');">
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">@lang('Sign In')</h3>
                            </div>
                            <div class="w-100">
                                <!-- <p class="social-media d-flex justify-content-end">
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
								</p> -->
                            </div>
                        </div>

                        <form class="signin-form" action="{{route('login')}}" method="post" novalidate>
                            @csrf
                            <div class="form-group mb-3">
                                <label class="label" for="email">@lang('Email')</label>
                                <input type="text" name="email" class="form-control form-control-lg input-lg" value="{{old('email')}}" id="email" placeholder="Enter Email">


                            </div>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group mb-3">
                                <label class="label" for="password">@lang('Password')</label>

                                <input type="password" name="password" class="form-control form-control-lg input-lg" id="user-password" placeholder="Enter Password">
                            </div>
                            @error('password')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">@lang('Sign In')</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0">@lang('Remember Me')
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{ route('password.request') }}">@lang('Forgot Password')</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center"> @lang('Not a member?') <a class="btn btn-info btn-lg btn-block" href="{{ route('register') }}">{{ __('Sign Up') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection