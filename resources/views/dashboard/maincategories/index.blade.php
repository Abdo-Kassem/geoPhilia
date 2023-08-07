@extends('layouts.dashboard')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الاقسام الرئيسية </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active"> الاقسام الرئيسية
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="content-header-right col-md-3 col-12 mb-2">
                    <h3 class="content-header-title"> <a href="{{ route('dashboard.maincategories.create') }}"
                            class="btn btn-warning btn-min-width box-shadow-3 mr-1 mb-1">إضافة قسم رئيسي</a> </h3>

                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">جميع الاقسام الرئيسية </h4>
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
                                        @if ($maincategories->count() > 0)
                                            <table
                                                class="table display wrap table-striped table-bordered scroll-horizontal">
                                                <thead class="">
                                                    <tr>
                                                        <th>اسم القسم</th>
                                                        <th> وصف القسم </th>
                                                        <th>اجراءات</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @isset($maincategories)
                                                        @foreach ($maincategories as $category)
                                                            <tr>
                                                                <td>{{ $category->name }}</td>
                                                                <td>{{ $category->comment }}</td>
                                                                <td>
                                                                    <div class="btn-group" role="group"
                                                                        aria-label="Basic example">
                                                                        <a href="{{ route('dashboard.maincategories.edit', $category->id) }}"
                                                                            class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>


                                                                        <a href="{{ route('dashboard.maincategories.delete', $category->id) }}"
                                                                            class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>



                                                                    </div>
                                                                </td>
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
                </section>
            </div>
        </div>
    </div>
@endsection
