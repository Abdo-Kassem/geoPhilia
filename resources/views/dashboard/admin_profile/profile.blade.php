@extends('layouts.dashboard')
@section('title')
    حساب الادمن
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">حساب الادمن</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active"> حساب الادمن
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header" style='margin-bottom:30px'>
                                    
                                    <div class="heading-elements row ">
                                        <ul class="list-inline mb-0 " >
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{ route('admin.profile.update') }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> الادمن
                                                </h4>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group  mt-1">
                                                            <label for="adminName" class="card-title ml-1">  اسم الادمن
                                                            </label>
                                                            <input type="text" value="{{$admin->name}}" id="adminName" class="form-control"
                                                                placeholder="اسم الادمن" name="name" required>
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">

                                                            <label for="switcheryColor4" class="card-title ml-1">البريد الالكتروني
                                                                 </label>

                                                            <input type="email" value="{{$admin->email}}" id="email" class="form-control"
                                                                placeholder="email  " name="email" required>
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">

                                                            <label for="switcheryColor4" class="card-title ml-1">كلمة المرور
                                                            </label>

                                                            <input type="password" id="password"
                                                                class="form-control" placeholder="enter password     "
                                                                name="password">
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>




                                            <div class="form-actions">
                                                <button type="reset" class="btn btn-warning btn-lg mr-1">
                                                    <i class="ft-x"></i> عودة
                                                </button>
                                                <button type="submit" class="btn btn-lg btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection