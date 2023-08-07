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
                                <li class="breadcrumb-item active"> اضافة المكتبة الجيولوجيَّــة
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
                                    <h4 class="card-title" id="basic-layout-form"> اضافة ملف </h4>
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
                                        <form class="form" action="{{ route('dashboard.geo_lib.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label> الملف </label>
                                                <label id="filePath" class="file center-block">
                                                    {{-- <input type="file" id="file" name="photo" required> --}}
                                                    <input type="file" id="filePath " required accept="application/pdf"
                                                        capture class="form-control round" placeholder="اختر الملف"
                                                        name="filePath">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('filePath')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label id="fileName"> عنوان الملف</label>
                                                
                                                {{-- <input type="file" id="file" name="photo" required> --}}
                                                <input type="text" id="fileName " required
                                                    capture class="form-control round" placeholder="اسم الملف"
                                                    name="fileName">
                                                <span class="file-custom"></span>
                                               
                                                @error('fileName')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>اضافة تعليق
                                                </h4>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="details" class="card-title ml-1">اضف تعليق
                                                        </label>
                                                        <textarea class="form-control" id="details" name="comment"  rows="2"></textarea>
                                                        @error('comment')
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
