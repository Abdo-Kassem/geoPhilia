@extends('layouts.site')

@section('content')
    <!-- Start Banner
                                            ============================================= -->
    <div class="banner-area text-small content-double button-effect bg-fixed"
        style="background-image: url(assets/frontend/img/back.jpg)">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="double-items">
                            <!-- Banner Left Content -->
                            <div class="info col-md-8">
                                <div class="content inc-video">
                                    <h1 class='main-page-header'>أولُ مبادرةٍ عربيةٍ لتبسيطِ العلوم الجيولوجيَّة</h1>
                                    <p>هدفنا هو إثراء المحتوى العربي العلمي في تخصص علوم الأرض والجيولوجيا، ومن هذا المنطلق أطلقنا عنان المبادرة لتكون رائدة في تبسيط علوم الأرض والجيولوجيا لغير المتخصصين. لنتمكن من تحقيق رغبة التعلُّم الكامنة في الإنسان فطرياً، وإشباع الفراغ المعرفي لديه، قادرين بذلك على بلوغ آفاق سامية، ولتلينَ لنا الصخور عِشقاً
                                    </p>

                                </div>
                            </div>
                            <!-- End Banner Left Content -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->



    <!-- Start Blog
                                                                                                ============================================= -->
    <div class="blog-area full-width  default-padding">
        <div class="container" style="padding-bottom: 50px;">
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    @if ($reviews->count() > 0)
                        @isset($reviews)
                            @foreach ($reviews as $review)
                                <div class="col-md-6 col-sm-6 equal-height">
                                    <div class="item">
                                        <div class="thumb">
                                        {{--
                                            <a href="{{ route('single', $review->id) }}">
                                                <img src="{{ $review->photo }}" alt="صورة المقال">
                                            </a>
                                             <div class="tags">
                                                <a href="#">startup</a>
                                                <a href="#">business</a>
                                            </div> --}}
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="{{ route('single', $review->id) }}">{{ $review->review }}</a>
                                            </h4>
                                            {{--
                                            <div class="meta">
                                                <ul>
                                                   <li><a href="#"><i class="fas fa-user"></i> User</a></li> 
                                                    <li><i class="fas fa-calendar-alt "></i> {{ $review->created_at }}</li>
                                                    <li><a href="#"><i class="fas fa-comments"></i> 23</a></li>
                                                </ul>
                                            </div>
                                            --}}
                                            <p>
                                                                                            {{-- {!! $review->details !!} --}}
                                                {!! Str::limit($review->details, 300) !!}
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
                    @endif



                </div>
                <div class="float-right">
                    <a href="{{route('all')}}" class="btn circle btn-dark border btn-md" style="text-align: center">عرض المزيد</a>

                </div>
            </div>
        </div>

        <!-- End Blog -->
    @endsection
