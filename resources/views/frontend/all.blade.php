@extends('layouts.site')

@section('content')
    <!-- Start Breadcrumb -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>مقالتنا</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">الرئيسية</a></li>
                        <li class="active">مقالتنا</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog-->
    <div class="blog-area full-width bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    @isset($reviews)
                        @foreach ($reviews as $review)
                            <div class="col-md-6 col-sm-6 equal-height">
                                <div class="item">
                                    <div class="thumb">
                                        <a href="{{ route('single', $review->id) }}">
                                            <img src="{{ $review->photo }}" alt="صورة المقال">
                                        </a>
                                        {{-- <div class="tags">
                                                <a href="#">startup</a>
                                                <a href="#">business</a>
                                            </div> --}}
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="{{ route('single', $review->id) }}">{{ $review->review }}</a>
                                        </h4>
                                        <div class="meta">
                                            <ul>
                                                {{-- <li><a href="#"><i class="fas fa-user"></i> User</a></li> --}}
                                                <li><i class="fas fa-calendar-alt "></i> {{ $review->created_at }}</li>
                                                {{-- <li><a href="#"><i class="fas fa-comments"></i> 23</a></li> --}}
                                            </ul>
                                        </div>
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




                    <div class="float-center">
                        {{ $reviews->links() }}

                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- End Blog -->
@endsection
