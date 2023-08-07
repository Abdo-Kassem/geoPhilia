@extends('layouts.dashboard')
@section('title')
    Geo gallery
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">عــن الــمُــبـــــــادرة</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active"> عــن الــمُــبـــــــادرة
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
                                <div class="card-header" style='margin-bottom:30px'>
                                    
                                    <div class="heading-elements row justify-content-between" style='width:99%;'>
                                        <div class="row col-3">
                                            @if(isset($aboutInitiative))
                                            <div class="col-6"><a
                                                    href="{{ route('dashboard.aboutInitiative.edit') }}"
                                                    class="btn btn-outline-primary btn-min-width box-shadow-3">تعديل</a>

                                            </div>
                                            <div class="col-6"><a
                                                    href="{{ route('dashboard.aboutInitiative.delete') }}"
                                                    class="btn btn-outline-danger btn-min-width box-shadow-3">حذف</a>
                                            </div>
                                            @endif

                                        </div>
                                        <ul class="list-inline mb-0 col-2" >
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
                                    <div class="card-body card-dashboard" style='text-align:right'>
                                        @if(isset($aboutInitiative))
                                        
                                        <?php echo nl2br($aboutInitiative->article);?>
                                        
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
