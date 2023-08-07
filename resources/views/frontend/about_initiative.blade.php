@extends('layouts.site')

@section('content')
    <!-- Start Breadcrumb
                                                                                ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center padding-xl text-light"
        style="background-image: url(assets/img/2440x1578.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>عــن الــمُــبـــــــادرة</h1>
                    <p>
                        نحن جيوفيليا، نحن مَـن أدمَـنَّــا الطبيعة فأبهرتـنــا جمالاً، وأيضاً نحن مَـن عَـشِـقـنَــا الصخور فلانَـت لنا عِشقاً.
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
    <div class="blog-area full-width ">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <!-- Single Item -->
                    @isset ($aboutInitiative)
                        
                                <div class="col-sm-12  item about-initiative-article">
                                    <div class='font-size-18'>
                                        <?php echo nl2br($aboutInitiative->article);?>
                                    </div>
                                </div>
                           
                        @else
                            <div class="col-5 mb-5">
                                <h2 style="text-align: center; margin-bottom:30px;">@lang('لا يوجد بيانات ')</h2>
                            </div>
                    @endisset

                </div>
            </div>
        </div>
    </div>

    <!-- End Blog -->
@endsection
