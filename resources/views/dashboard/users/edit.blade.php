@extends('layouts.dashboard')
@section('title')
    edit user
@endsection
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل {{ $user->name }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">  تعديل مستخدم </h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
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
                                        <form class="form"
                                            action="{{ route('dashboard.users.update', $user->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="{{ $user->id }}" type="hidden">

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>  
                                                </h4>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <label for="projectinput1" class="card-title ml-1"> الاسم
                                                            </label>
                                                            <input type="text" id="name" class="form-control"
                                                                value="{{ $user->name }}"
                                                                placeholder=" user   " name="name">
                                                            @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">

                                                            <label for="switcheryColor4" class="card-title ml-1">البريد الالكتروني
                                                                 </label>

                                                            <input type="email" id="email" class="form-control"
                                                                value="{{ $user->email }}"
                                                                placeholder="enter   email     " name="email">
                                                            @error('email')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">

                                                            <label for="switcheryColor4" class="card-title ml-1"> كلمة المرور
                                                            </label>

                                                            <input type="password" id="password" class="form-control"
                                                                value="" placeholder="enter  password     "
                                                                name="password">
                                                            @error('password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group mt-1">
                                                            <label for="password_confirmation"
                                                                class="card-title ml-1">{{ __('  password ') }}</label>


                                                            <input id="password_confirmation" type="password" value=""
                                                                placeholder=" enter password  "
                                                                class="form-control" name="password_confirmation"
                                                                autocomplete="new-password">
                                                            @error('password_confirmation')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                    onclick="history.back();">
                                                    <i class="ft-x"></i> عودة
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> تحديث 
                                                </button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection
