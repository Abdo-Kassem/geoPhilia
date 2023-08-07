@extends('layouts.dashboard')
@section('title')
    Geo gallery
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> Geo gallery </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active"> Geo gallery
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
                                <div class="card-header">
                                    <h4 class="card-title">Geo gallery كل</h4>
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
                                    <div class="card-body card-dashboard">
                                        @if ($geoGallaries->count() > 0)
                                            <table
                                                class="table display wrap table-striped table-bordered scroll-horizontal">
                                                <thead class="">
                                                    <tr>
                                                        <th >التعليق</th>
                                                        <th> الصوره او الفيديو</th>
                                                        <th>الاجراءات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @isset($geoGallaries)
                                                        @foreach ($geoGallaries as $geoGallary)
                                                            <tr>
                                                               
                                                                <td >{{nl2br($geoGallary->comment) }}</td>
                                                                <td>
                                                                @if($geoGallary->type == 1)
                                                                
                                                                    <video width="320" height="240" controls>
                                                                        <source src="{{asset('uploads/geo_gallary/'.$geoGallary->fileName) }}" >
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                @else
                                                                    <img width='320' heigth='240' style='display:inline-block'src="{{asset('uploads'.DIRECTORY_SEPARATOR.'geo_gallary'.DIRECTORY_SEPARATOR.$geoGallary->fileName) }}">
                                                                @endif
                                                                </td>
                                                                <td>

                                                                    <div class="row">
                                                                        <div class="col-12 mb-1 mt-1"><a
                                                                                href="{{ route('dashboard.geo_gallary.edit', $geoGallary->id) }}"
                                                                                class="btn btn-outline-primary btn-min-width box-shadow-3">تعديل</a>

                                                                        </div>
                                                                        <div class="col-12"><a
                                                                                href="{{ route('dashboard.geo_gallary.delete', $geoGallary->id) }}"
                                                                                class="btn btn-outline-danger btn-min-width box-shadow-3">حذف</a>
                                                                        </div>


                                                                    </div>

                                                            </tr>
                                                        @endforeach
                                                    @endisset

                                                </tbody>
                                            </table>
                                        @else
                                            <h2>@lang('لا يوجد بيانات')</h2>
                                        @endif
                                        <div class="justify-content-center d-flex">

                                        </div>
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
