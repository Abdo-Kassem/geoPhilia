@extends('layouts.dashboard')
@section('title')
    edit review
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
                                <li class="breadcrumb-item active">تعديل {{ $review->name }}
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
                                    <h4 class="card-title" id="basic-layout-form"> تعديل مقال </h4>
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
                                        <form class="form" action="{{ route('dashboard.reviews.update', $review->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input name="id" value="{{ $review->id }}" type="hidden">
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img src="{{ $review->photo }}" class="rounded-circle  height-150"
                                                        alt="Photo ">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label> صورة </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> المقال
                                                </h4>

                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="form-group mt-1">
                                                            <label for="projectinput1" class="card-title ml-1"> عنوان المقال
                                                            </label>
                                                            <input type="text" id="review" class="form-control" required
                                                                value="{{ $review->review }}"
                                                                placeholder="enter review name " name="review">
                                                            @error('review')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="switcheryColor4" class="card-title ml-1"> اختر
                                                                قسم رئيسي </label>
                                                            <select name="cat_id" class="form-control" required>
                                                                <option value="">الاقسام</option>
                                                                @foreach ($maincategories as $maincategory)
                                                                    <option value="{{ $maincategory->id }}"
                                                                        {{ $review->cat_id == $maincategory->id ? 'selected' : '' }}>
                                                                        {{ $maincategory->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        @error('cat_id')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="switcheryColor4" class="card-title ml-1"> نص المقال
                                                            </label>
                                                            <textarea class="form-control" id="details" name="details" required rows="2">{!! $review->details !!}</textarea>
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
@section('scripts')

    <script>
        CKEDITOR.replace('details');
    </script>


@endsection
