@extends('layouts.dashboard')
@section('title')
    عرض مستخدم
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> users </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">home</a>
                                </li>
                                <li class="breadcrumb-item active"> users
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
                                    <h4 class="card-title">All users </h4>
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
                                        @if ($users->count() > 0)
                                            <table
                                                class="table display nowrap table-striped table-bordered scroll-horizontal">
                                                <thead class="">
                                                    <tr>
                                                        <th>name</th>
                                                        <th> email</th>
                                                        <th>Procedure</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @isset($users)
                                                        @foreach ($users as $user)
                                                            <tr>
                                                                <td>{{ $user->name }}</td>
                                                                <td>{{ $user->email }}</td>
                                                                <td>

                                                                    <div class="row">
                                                                        <div class="col-6"><a
                                                                                href="{{ route('dashboard.users.edit', $user->id) }}"
                                                                                class="btn btn-outline-primary btn-min-width box-shadow-3">edit</a>

                                                                        </div>
                                                                        <div class="col-6"><a
                                                                                href="{{ route('dashboard.users.delete', $user->id) }}"
                                                                                class="btn btn-outline-danger btn-min-width box-shadow-3">delete</a>
                                                                        </div>


                                                                    </div>

                                                            </tr>
                                                        @endforeach
                                                    @endisset

                                                </tbody>
                                            </table>



                                        @else

                                            <h2>@lang('no_data_found')</h2>

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
