
        <!-- Preloader Start -->
        <div class="se-pre-con"></div>
        <!-- Preloader Ends -->

        <!-- Header
    ============================================= -->
        <header id="home">

            <!-- Start Navigation -->
            <nav class="navbar navbar-default attr-border navbar-sticky bootsnav">

                <div class="container">

                    <!-- Start Atribute Navigation -->
                    {{-- <div class="attr-nav button theme circle solid">
                        <ul>
                            <li>
                                <a href="{{route('login')}}">Login</a>
                            </li>
                        </ul>
                    </div> --}}
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="{{route('index')}}">
                            <img src="{{ asset('assets/dashboard/images/logo/geologo.jpg') }}" 
                                class="logo logo-display" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                            {{-- <li class="dropdown dropdown-right">
                                <a href="{{route('index')}}" class="dropdown-toggle smooth-menu" >Home</a>
                                <ul class="dropdown-menu">data-toggle="dropdown"
                                    <li><a href="index.html">Home Version One</a></li>
                                    <li><a href="index-2.html">Home Version Two</a></li>
                                    <li><a href="index-3.html">Home Version Three</a></li>
                                    <li><a href="index-4.html">Home Version Four</a></li>
                                    <li><a href="index-5.html">Home Version Five</a></li>
                                    <li><a href="index-6.html">Home Version Six</a></li>
                                    <li><a href="index-7.html">Home Version Seven</a></li>
                                    <li><a href="index-8.html">Home Version Eight</a></li>
                                    <li><a href="index-9.html">Home Version Nine <span class="badge">New</span></a>
                                    </li>
                                    <li><a href="index-10.html">Home Version Ten <span class="badge">New</span></a>
                                    </li>
                                </ul>
                            </li> --}}

                            {{--
                            --}}
                            {{-- <li>
                                <a class="smooth-menu" href="#about">About</a>
                            </li> --}}
    
                            <li>
                                <a class="smooth-menu" href="{{route('about_initiativ')}}">عــن الــمُــبـــــــادرة</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="{{route('about_foundr')}}">كلمة مؤسس المبادرة</a>
                            </li>

                            <li>
                                <a class="smooth-menu" href="{{route('geo_library')}}">المكتبة الجيولوجيَّــة</a>
                            </li>

                            <li>
                                <a class="smooth-menu" href="{{route('geo_gallary')}}">Geo gallery</a>
                            </li>

                            <li>
                                <a class="smooth-menu" href="{{route('voice')}}">Geocast</a>
                            </li>

                            <li class="dropdown show hidden-mobile">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    الاقسام
                                </a>
                                @isset($maincategories)
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    
                                    
                                    @foreach ($maincategories as $cat)
                                        <a class="dropdown-item d-none" href="{{ route('cat', $cat->id) }}">{{ $cat->name }}</a>
                                     @endforeach
                                </div>
                                @endisset
                            </li>

                            
                                @isset($maincategories)
                                <li class='mobile'>
                                    
                                    
                                    @foreach ($maincategories as $cat)
                                        <a class="dropdown-item d-none" href="{{ route('cat', $cat->id) }}">{{ $cat->name }}</a>
                                     @endforeach
                                </li>
                                @endisset
                            
                            
                            <li>
                                <a class="smooth-menu" href="{{route('index')}}">الرئيسية</a>
                            </li>

                            {{-- <li>

                                <a class="smooth-menu" href="#features">Features</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="#overview">Overview</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="#pricing">Pricing</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="#team">Team</a>
                            </li>
                            <li>
                                <a class="smooth-menu" href="#contact">contact</a>
                            </li> --}}


                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </nav>
            <!-- End Navigation -->

        </header>
        <!-- End Header -->
