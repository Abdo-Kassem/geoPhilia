@extends('layouts.dashboard')
@section('title')
    voice
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
                                <li class="breadcrumb-item active"> عــن الــمُــبـــــــادرة
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
                                    <h4 class="card-title" id="basic-layout-form"> اضافة عــن الــمُــبـــــــادرة</h4>
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
                                        <form class="form" action="{{ route('dashboard.aboutInitiative.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>اضافة مقال
                                                </h4>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="article" class="card-title ml-1">اضف مقال
                                                        </label>
                                                        <textarea class="form-control" id="article" name="article"  required rows="10"></textarea>
                                                        @error('article')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="form-actions">
                                                <button type="reset" class="btn btn-warning btn-lg mr-1">
                                                    <i class="ft-x"></i> back
                                                </button>
                                                <button type="submit" class="btn btn-lg btn-primary">
                                                    <i class="la la-check-square-o"></i> save
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
