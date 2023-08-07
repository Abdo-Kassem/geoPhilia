@extends('layouts.site')

@section('content')
    <!-- Start Breadcrumb
                                                                                ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Geocast</h1>
                    <p>
                    سماعُ العلوم هوايةٌ جميلةٌ تُطرِب القلب قبل الأُذن. لأنْ تسمعَ العلم يتحدثُ إليك مُقدِماً لك وجبةً دسِمةً من المعلوماتيَّة العلميَّة الرصينَة فهذا كل الجمال! ولكن... ماذا لو نطقَت الصخورُ وتحدَّثت إليك؟!
                    </p>
                    <hr>
                    <ul class="breadcrumb">
                        <li><a href="{{route('index')}}">الرئيسية</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
                                                                                ============================================= -->
    <div class="blog-area full-width default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    @if ($voices->count() > 0)
                        @isset($voices)
                            @foreach ($voices as $voice)
                                <div class="col-md-6 col-sm-6 equal-height">
                                    <div class="item">
                                        <div class="thumb">
                                            <a href="{{ route('voicesingle', $voice->id) }}">
                                                <audio src="{{ $voice->audio }}" type="audio/*" controls>
                                                </audio>
                                                {{-- <img src="{{ $voice->audio }}" alt="صورة المقال"> --}}
                                            </a>
                                           
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="{{ route('voicesingle', $voice->id) }}">{{ $voice->title }}</a>
                                            </h4>
                     
                                            <p>
                                                {{ $voice->details }}
                                            </p>
                                            {{-- <div class="read-more">
                                                <a href="#" class="more-btn">Read More <i
                                                        class="fas fa-angle-double-right"></i></a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            @endforeach
                        @endisset




                        <div class="float-center">
                            {{ $voices->links() }}
                        @else
                            <div class="col-5 mb-5">
                                <h2 style="text-align: center; margin-bottom:30px;">@lang('لا يوجد بيانات ')</h2>
                            </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- End Blog -->
@endsection
