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
                                    <h3 class="mb-4"><span>{{ __('Register') }} </span></h3>
                                </div>
                                <div class="w-100">
                                    <!-- <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a>
                                    </p> -->
                                </div>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="name" class="label">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control form-control-lg input-lg" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group mb-3">
                                    <label for="email" class="label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control form-control-lg input-lg"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">


                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group mb-3">

                                    <label for="password" class="label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control form-control-lg input-lg"
                                        name="password" required autocomplete="new-password">

                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="form-group mb-3">
                                    <label class="label"
                                        for="password">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password"
                                        class="form-control form-control-lg input-lg" name="password_confirmation" required
                                        autocomplete="new-password">

                                </div>

                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        Up</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
