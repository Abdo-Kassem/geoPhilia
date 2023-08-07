@extends('layouts.dashboard')
@section('title')
    edit عن الموقع
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home </a>
                                </li>
                                <li class="breadcrumb-item"><a href=""> Home </a>
                                </li>
                                <li class="breadcrumb-item active">edit قائمة
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
                                    <h4 class="card-title" id="basic-layout-form"> edit عن الموقع </h4>
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
                                            action="{{ route('dashboard.manageFront.updateAbout', $about->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="{{ $about->id }}" type="hidden">


                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group  mt-1">
                                                        <label for="projectinput1" class="card-title ml-1"> تفاصيل 1الصفحة
                                                        </label>

                                                        <textarea id="complaintinput5" rows="5" name="photo" class="form-control round"
                                                            value="">{{ $about->photo }}</textarea>
                                                        @error('photo')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mt-1">
                                                        <label for="projectinput1" class="card-title ml-1"> تفاصيل الصفحة
                                                        </label>

                                                        <textarea id="complaintinput5" rows="5" name="details" class="form-control round"
                                                            value="">{{ $about->details }}</textarea>
                                                        @error('details')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-actions">
                                                <button type="reset" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> back
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> update
                                                </button>
                                            </div>

                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <!-- // Basic form layout section end -->
        </div>
    </div>
@endsection
