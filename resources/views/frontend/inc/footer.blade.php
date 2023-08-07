{{-- <footer class="footer footer-2">
    <div class="icon-boxes-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Delivery Anywhere</h3><!-- End .icon-box-title -->
                            <p>Enjoy ordering and delivery</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Multiple payment methods
                            </h3><!-- End .icon-box-title -->
                            <p>Secure Payment & Safe Shopping</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-info-circle"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                            <p>When you sign up</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                            <p>24/7 amazing services</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->



    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="widget widget-about">
                        <img src="{{ asset('assets/frontend/images/geologo.jpg') }}" class="footer-logo"
                            alt="Footer Logo" width="105" height="25">
                        <div class="row">
                            <div class="col-sm-6 col-md-5">
                                <span class="widget-about-title">Got Question? Call us 24/7</span>
                                <a href="tel:{ $phone->action }}">{{ $phone->action }}</a>
                            </div><!-- End .col-sm-6 -->
                            <div class="col-sm-6 col-md-5">
                                <span class="widget-about-title"> Contact us</span>
                                <a href="mailto:{{ $email->action }}">{{ $email->action }}</a>
                            </div><!-- End .col-sm-6 -->
                        </div>


                        <div class="widget-about-info mt-3">
                            <div class="row">

                                <div class="col-sm-6 col-md-8">
                                    <div class="social-icons">
                                        <a href="{{ $facebook->action }}" class="social-icon" title="Facebook"
                                            target="_blank"><i class="icon-facebook-f"></i></a>
                                        <a href="{{ $twitter->action }}" class="social-icon" title="Twitter"
                                            target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="{{ $instagram->action }}" class="social-icon" title="Instagram"
                                            target="_blank"><i class="icon-instagram"></i></a>
                                        <a href="{{ $youtube->action }}" class="social-icon" title="Youtube"
                                            target="_blank"><i class="icon-youtube"></i></a>
                                        <a href="{{ $pinterest->action }}" class="social-icon" title="Pinterest"
                                            target="_blank"><i class="icon-pinterest"></i></a>
                                        <a href="{{ $tiktok->action }}" class="social-icon" title="tiktok"
                                            target="_blank"><i class="icon-tiktok"></i></a>
                                    </div><!-- End .soial-icons -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .widget-about-info -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-12 col-lg-3 -->

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">How to shop on </a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="{{ route('login') }}">Log in</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-4 col-lg-3 -->

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-4 col-lg-3 -->

                <div class="col-sm-4 col-lg-2">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-64 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © 2022 Coddiv. All Rights Reserved.</p>
            <!-- End .footer-copyright -->

            <figure class="footer-payments">
                <img src="{{ asset('assets/frontend/images/payments.png') }}" alt="Payment methods" width="272"
                    height="20">
            </figure><!-- End .footer-payments -->

        </div><!-- End .widget-about-info -->
    </div><!-- End .container -->
</footer><!-- End .footer -->

<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                placeholder="Search product ..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab"
                    aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab"
                    aria-controls="mobile-cats-tab" aria-selected="false">Brands</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel"
                aria-labelledby="mobile-menu-link">
                <nav class="mobile-nav">
                    <ul class="mobile-menu">
                        <li class="active">
                            <a href="#">Home</a>

                        </li>
                        <li>
                            <a href="#">Shop</a>

                        </li>
                        <li>
                            <a href="#">About Us</a>

                        </li>

                    </ul>
                </nav><!-- End .mobile-nav -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                <nav class="mobile-cats-nav">
                    <ul class="mobile-cats-menu">
                        @isset($brands)
                            @foreach ($brands as $brand)
                                <li><a href="{{ $brand->link }}">{{ $brand->brand }} </a></li>
                            @endforeach
                        @endisset
                    </ul><!-- End .mobile-cats-menu -->
                </nav><!-- End .mobile-cats-nav -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->

        <div class="social-icons">
            <a href="{{ $facebook->action }}" class="social-icon" title="Facebook" target="_blank"><i
                    class="icon-facebook-f"></i></a>
            <a href="{{ $twitter->action }}" class="social-icon" title="Twitter" target="_blank"><i
                    class="icon-twitter"></i></a>
            <a href="{{ $instagram->action }}" class="social-icon" title="Instagram" target="_blank"><i
                    class="icon-instagram"></i></a>
            <a href="{{ $youtube->action }}" class="social-icon" title="Youtube" target="_blank"><i
                    class="icon-youtube"></i></a>
            <a href="{{ $pinterest->action }}" class="social-icon" title="Pinterest" target="_blank"><i
                    class="icon-pinterest"></i></a>
            <a href="{{ $tiktok->action }}" class="social-icon" title="tiktok" target="_blank"><i
                    class="icon-tiktok"></i></a>

        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container --> --}}


<!-- Start Footer
    ============================================= -->
<footer class="default-padding-top bg-light">
    <div class="container">
        <div class='row'>
            <div class="f-items " >
                <div class="col-md-4 col-sm-6  equal-height item">
                    <div class="f-item about">
                        <img src="{{ asset('assets/dashboard/images/logo/geologo.jpg') }}" alt="Logo">
                        
                        <ul>
                            <li>
                                <a href="{{ $facebook->action }}"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ $twitter->action }}"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ $instagram->action }}"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ $google->action }}"><i class="fab fa-tumblr"></i></a>
                            </li>
                            {{-- <li>
                                <a href="{{ $pinterest->action }}"><i class="fab fa-pinterest-p"></i></a>
                            </li> --}}
                            <li>
                                <a href="{{ $linkedin->action }}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="{{ $youtube->action }}"><i class="fab fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="{{ $soundcloud->action }}"><i class="fab fa-soundcloud"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md-2 col-sm-6 equal-height item">
                    <div class="f-item link">
                        <h4 style="color: black;">Company</h4>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Compnay History</a>
                            </li>
                            <li>
                                <a href="#">Features</a>
                            </li>
                            <li>
                                <a href="#">Blog Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 equal-height item">
                    <div class="f-item link">
                        <h4 style="color: black;">Resources</h4>
                        <ul>
                            <li>
                                <a href="#">Career</a>
                            </li>
                            <li>
                                <a href="#">Leadership</a>
                            </li>
                            <li>
                                <a href="#">Strategy</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">History</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <p> Copyright &copy; Geophilia . All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right link">
                        {{-- <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>

                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->
