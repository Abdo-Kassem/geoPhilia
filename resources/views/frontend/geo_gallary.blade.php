@extends('layouts.site')

@section('content')
    <!-- Start Breadcrumb
                                                                                ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Geo gallery</h1>
                    <p>
                    عينُ الطبيعةِ ترصدُ معالِـمَ ذاتها فخراً، عينُ الإنسانِ تنبَهِـرُ بتلك المعالِـم عِشقاً، أمَّا عدسة الكاميرا فـتُـوثِـــقُ تلك المعالِـم شغفاً. نرصدُ الطبيعة بجبالِـها وثرواتِـها ومعالِمِـها بعين الهُواة، وننقِلُها لكم بعين المُحِبين، فقط... لِـنـتـقـاســـمَ الجمال.
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
                    @if ($geoGallaries->count() > 0)
                        @isset($geoGallaries)
                            @foreach ($geoGallaries as $geoGallary)
                                <div class="col-md-6 col-sm-6 equal-height card">
                                    <div class="item">
                                        <div class="thumb">
                                            <div style='height:300px'>
                                                @if($geoGallary->type == 0) 
                                                    <a class='' href="{{route('video.download',$geoGallary->id)}}">
                                                        <img src="{{asset('uploads/geo_gallary/'.$geoGallary->fileName)}}" class='card-img-top' style='width:100%;height:100%' alt="صورة ">
                                                    </a>
                                                    
                                                @else
                                                <video controls class='card-img-top' style='width:100%;height:100%'>
                                                    <source src="{{asset('uploads/geo_gallary/'.$geoGallary->fileName)}}"  >
                                                    
                                                    Your browser does not support the video tag.
                                                </video>
                                                @endif
                                            </div>
                                            {{-- <div class="tags">
                                                <a href="#">startup</a>
                                                <a href="#">business</a>
                                            </div> --}}
                                        </div>
                                        <div class="info">
                                           
                                            <p>
                                                {{ $geoGallary->comment }}
                                            </p>
                                            {{-- <div class="read-more">
                                                <a href="#" class="more-btn">Read More <i
                                                        class="fas fa-angle-double-right"></i></a>
                                            </div> --}}
                                        </div>
                                        <div class='download-video-buttons'>
                                            <a class='btn btn-primary file_operation' href="{{route('video.download',$geoGallary->id)}}"><i class="fas fa-download"> تنزيل </i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Item -->
                            @endforeach
           
                        @endisset




                        <div class="float-center">
                            {{ $geoGallaries->links() }}
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
