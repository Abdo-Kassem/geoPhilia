@extends('layouts.dashboard')
@section('title')
    edit footer
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
                                <li class="breadcrumb-item active">edit footer
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
                                    <h4 class="card-title" id="basic-layout-form"> edit footer </h4>
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
                                            action="{{ route('dashboard.manageFront.updateFooter', $footer->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="{{ $footer->id }}" type="hidden">


                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group  mt-1">
                                                        <label for="projectinput1" class="card-title ml-1"> name
                                                        </label>
                                                        <input type="text" value="{{ $footer->name }}" id="name"
                                                            class="form-control" placeholder="enter footer  " name="name">
                                                        @error('name')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group  mt-1">
                                                        <label for="projectinput1" class="card-title ml-1"> Link
                                                        </label>
                                                        <input type="text" value="{{ $footer->action }}" id="action"
                                                            class="form-control" placeholder="enter footer link "
                                                            name="action">
                                                        @error('action')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
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
