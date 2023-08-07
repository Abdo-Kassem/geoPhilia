@extends('layouts.login')
@section('title', 'Admin login')
@section('content')


    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-dark navbar-hide-on-scroll navbar-border navbar-shadow navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                            href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.html">
                            <img class="brand-logo" alt="Coddiv admin logo"
                                src="{{ asset('assets/dashboard/images/logo/geologo.jpg') }}">
                            <h3 class="brand-text">Coddiv Admin</h3>
                        </a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                                class="la la-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-container">
                <div class="collapse navbar-collapse justify-content-end" id="navbar-mobile">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link mr-2 nav-link-label" href="{{ url('/') }}"><i
                                    class="ficon ft-arrow-left"></i></a></li>
                        <li class="dropdown nav-item">
                            <a class="nav-link mr-2 nav-link-label" href="#" data-toggle="dropdown"><i
                                    class="ficon ft-settings"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section class="flexbox-container" style="margin: 30px">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0">
                        <div class="card-title text-center">
                            <div class="p-1">
                                <img src="{{ asset('assets/dashboard/images/logo/geologo.png') }}"
                                    style="height: 130px; width:160px" alt="LOGO" />
                            </div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                            <span>Login with Coddiv</span>
                        </h6>
                    </div>
                    @include('dashboard.includes.alerts.errors')
                    @include('dashboard.includes.alerts.success')
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal form-simple" action="{{ route('admin.login') }}" method="post"
                                novalidate>
                                @csrf
                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                    <input type="text" name="email" class="form-control form-control-lg input-lg"
                                        value="{{ old('email') }}" id="email" placeholder="Enter Your Email  ">
                                    <div class="help-block font-small-3"></div>

                                    <div class="form-control-position">
                                        <i class="ft-user"></i>
                                    </div>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                </fieldset>
                                <br>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input type="password" name="password" class="form-control form-control-lg input-lg"
                                        id="user-password" placeholder=" Enter Your Password">
                                    <div class="form-control-position">
                                        <i class="la la-key"></i>
                                    </div>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </fieldset>
                                <div class="form-group row">
                                    <div class="col-md-6 col-12 text-center text-md-left">
                                        <fieldset>
                                            <input type="checkbox" name="remember_me" id="remember-me" class="chk-remember">
                                            <label for="remember-me"> Remember me</label>
                                        </fieldset>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger btn-lg btn-block"><i class="ft-unlock"></i>
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
