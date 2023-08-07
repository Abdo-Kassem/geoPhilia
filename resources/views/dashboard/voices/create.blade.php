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
                                <li class="breadcrumb-item active"> اضافة ملف صوتية
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
                                    <h4 class="card-title" id="basic-layout-form"> اضافة ملف صوتية </h4>
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
                                        <form class="form" action="{{ route('dashboard.voices.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label> المقطع الصوتي </label>
                                                <label id="projectinput7" class="file center-block">
                                                    {{-- <input type="file" id="file" name="photo" required> --}}
                                                    <input type="file" id="complaintinput6 " required accept="audio/*"
                                                        capture class="form-control round" placeholder="النطق"
                                                        name="audio">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> ملفات صوتية
                                                </h4>

                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group  mt-1">
                                                            <label for="projectinput1" class="card-title ml-1"> عنوان الملف
                                                                صوتية
                                                            </label>
                                                            <input type="text" value="" id="title"
                                                                class="form-control" placeholder="اضف عنوان الملف صوتية "
                                                                required name="title">
                                                            @error('title')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="switcheryColor4" class="card-title ml-1"> نص الملف صوتية
                                                        </label>
                                                        <textarea class="form-control" id="details" name="details" required value="{{ old('details') }}" rows="2"></textarea>
                                                        @error('details')
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
