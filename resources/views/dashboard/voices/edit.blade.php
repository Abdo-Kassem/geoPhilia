@extends('layouts.dashboard')
@section('title')
    edit voice
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
                                <li class="breadcrumb-item active">تعديل {{ $voice->name }}
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل المكتبة الصوتية </h4>
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
                                        <form class="form" action="{{ route('dashboard.voices.update', $voice->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="{{ $voice->id }}" type="hidden">
                                            {{-- <div class="form-group">
                                                <div class="text-center">
                                                    <img src="{{ $voice->photo }}" class="rounded-circle  height-150"
                                                        alt="Photo ">
                                                </div>
                                            </div> --}}


                                            <div class="form-group">
                                                <label> ملفات صوتية </label>
                                                <label id="projectinput7" class="file center-block">
                                                    {{-- <input type="file" id="file" name="photo"> --}}
                                                    <input type="file" id="complaintinput6 " value="{{ $voice->audio }}"
                                                        required accept="audio/*" capture class="form-control round"
                                                        placeholder="النطق" name="audio">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('audio')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> الالمكتبة الصوتية
                                                </h4>

                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group mt-1">
                                                            <label for="projectinput1" class="card-title ml-1"> عنوان
                                                                المكتبة الصوتية
                                                            </label>
                                                            <input type="text" id="title" class="form-control"
                                                                required value="{{ $voice->title }}"
                                                                placeholder="enter title name " name="title">
                                                            @error('title')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="switcheryColor4" class="card-title ml-1"> نص المكتبة
                                                                الصوتية
                                                            </label>
                                                            <textarea class="form-control" id="details" name="details" required rows="2">{{ $voice->details }}</textarea>
                                                            @error('details')
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
