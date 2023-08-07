@extends('layouts.site')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>المكتبة الصوتية</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">الرئيسية</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog -->
    <div id="blog" class="blog-area full-width single default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="col-md-12" style="padding-bottom: 50px;">
                        <div class="item">
                            <div class="thumb">
                                <a href="#">
                                    <audio src="{{ $voicesingle->audio }}" type="audio/*" controls>
                                    </audio>
                                    {{-- <img src="{{ $voice->audio }}" alt="صورة المقال"> --}}
                                </a>
                            </div>
                            <div class="info">
                                <h3>{{ $voicesingle->review }}</h3>
                               
                                <p>
                                    {!! $voicesingle->details !!}
                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection
