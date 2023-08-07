@extends('layouts.dashboard')
@section('title')
    Geo gallery تعديل
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
                                <li class="breadcrumb-item active"> Geo gallery تعديل 
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
                                    <h4 class="card-title" id="basic-layout-form">  Geo gallery تعديل </h4>
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
                                        <form class="form" action="{{ route('dashboard.geo_gallary.update', $geoGallary->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="{{ $geoGallary->id }}" type="hidden">
                                            {{-- <div class="form-group">
                                                <div class="text-center">
                                                    <img src="{{ $voice->photo }}" class="rounded-circle  height-150"
                                                        alt="Photo ">
                                                </div>
                                            </div> --}}


                                            <div class="form-group">
                                                <label>صوره او فيديو</label>
                                                <label id="file" class="file center-block">
                                                    {{-- <input type="file" id="file" name="photo"> --}}
                                                    <input type="file" id="file " value="{{ $geoGallary->fileName }}"
                                                         accept="video/*,image/*" capture class="form-control round"
                                                        placeholder="النطق" name="fileName">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('fileName')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>  Geo gallery  
                                                </h4>

                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="comment" class="card-title ml-1">التعليق
                                                                
                                                            </label>
                                                            <textarea class="form-control" id="comment" name="comment" required rows="2">{{ $geoGallary->comment }}</textarea>
                                                            @error('comment')
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
                                                <button type="submit" class="btn btn-primary" name='edit' value='edit'>
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
