@extends('layouts.dashboard')
@section('title')
    عرض قوائم
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
                                <li class="breadcrumb-item active">edit الخدمات
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
                                    <h4 class="card-title" id="basic-layout-form"> edit الخدمات </h4>
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
                                        @if ($services->count() > 0)
                                            <table
                                                class="table display nowrap table-striped table-bordered scroll-horizontal">
                                                <thead class="">
                                                    <tr>
                                                        <th> اسم الخدمة </th>
                                                        <th>لينك </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @isset($services)
                                                        @foreach ($services as $service)
                                                            <tr>
                                                                <td>{{ $service->service }}</td>
                                                                <td>{{ $service->url }}</td>
                                                                <td>

                                                                    <div class="row">
                                                                        <div class="col-6"><a
                                                                                href="{{ route('dashboard.manageFront.editService', $service->id) }}"
                                                                                class="btn btn-outline-primary btn-min-width box-shadow-3">edit</a>

                                                                        </div>
                                                                        <div class="col-6"><a
                                                                                href="{{ route('dashboard.manageFront.deleteService', $service->id) }}"
                                                                                class="btn btn-outline-danger btn-min-width box-shadow-3">delete</a>
                                                                        </div>


                                                                    </div>

                                                            </tr>
                                                        @endforeach
                                                    @endisset

                                                </tbody>
                                            </table>
                                        @else
                                            <h2>@lang('site.no_data_found')</h2>
                                        @endif
                                        <div class="justify-content-center d-flex">

                                        </div>
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
