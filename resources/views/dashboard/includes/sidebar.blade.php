    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href="{{ route('dashboard.dashboard') }}"><i class="la la-home"></i><span
                            class="menu-title" data-i18n="nav.dash.main">Home</span><span
                            class="badge badge badge-info badge-pill float-right mr-2"></span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-user"></i><span class="menu-title"
                            data-i18n="nav.footers.main">المشرفين</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('dashboard.users.index') }}"
                                data-i18n="nav.footers.footer_light">عرض المشرفين</a>
                        </li>
                        <li><a class="menu-item" href="{{ route('dashboard.users.create') }}"
                                data-i18n="nav.footers.footer_dark">اضافة مشرف </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                            data-i18n="nav.footers.main">الاقسام </span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="{{ route('dashboard.maincategories.index') }}"
                                data-i18n="nav.footers.footer_light">عرض الاقسام
                            </a>
                        </li>
                        <li><a class="menu-item" href="{{ route('dashboard.maincategories.create') }}"
                                data-i18n="nav.footers.footer_dark">إضافة قسم
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                            data-i18n="nav.footers.main">المقالات</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="{{ route('dashboard.reviews.index') }}"
                                data-i18n="nav.footers.footer_light">عرض المقالات
                            </a>
                        </li>
                        <li><a class="menu-item" href="{{ route('dashboard.reviews.create') }}"
                                data-i18n="nav.footers.footer_dark">اضافة مقال
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                            data-i18n="nav.footers.main">Geocast</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="{{ route('dashboard.voices.index') }}"
                                data-i18n="nav.footers.footer_light">Geocast عرض
                            </a>
                        </li>
                        <li><a class="menu-item" href="{{ route('dashboard.voices.create') }}"
                                data-i18n="nav.footers.footer_dark">اضافة مقال صوتي
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                            data-i18n="nav.footers.main">Geo gallery</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="{{ route('dashboard.geo_gallary.index') }}"
                                data-i18n="nav.footers.footer_light">Geo gallery عرض
                            </a>
                        </li>
                        <li><a class="menu-item" href="{{ route('dashboard.geo_gallary.create') }}"
                                data-i18n="nav.footers.footer_dark">Geo gallery اضافة
                            </a>
                        </li>
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                            data-i18n="nav.footers.main">المكتبة الجيولوجيَّــة</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="{{ route('dashboard.geo_lib.index') }}"
                                data-i18n="nav.footers.footer_light"> عرض المكتبة الجيولوجيَّــة
                            </a>
                        </li>
                        
                        <li><a class="menu-item" href="{{ route('dashboard.geo_lib.create') }}"
                                data-i18n="nav.footers.footer_dark"> اضف الى المكتبة الجيولوجيَّــة
                            </a>
                        </li>
                        
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                            data-i18n="nav.footers.main">عــن الــمُــبـــــــادرة</span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="{{ route('dashboard.aboutInitiative.index') }}"
                                data-i18n="nav.footers.footer_light"> عرض عــن الــمُــبـــــــادرة
                            </a>
                        </li>
                        @if( App\Models\AboutInitiative::first() === null)
                        <li><a class="menu-item" href="{{ route('dashboard.aboutInitiative.create') }}"
                                data-i18n="nav.footers.footer_dark"> اضافة عــن الــمُــبـــــــادرة
                            </a>
                        </li>
                       @endif
                    </ul>
                </li>

                <li class=" nav-item"><a href="#"><i class="la la-header"></i><span class="menu-title"
                            data-i18n="nav.footers.main"> كلمة مؤسس المبادرة </span></a>
                    <ul class="menu-content">

                        <li><a class="menu-item" href="{{ route('dashboard.founder_speech.index') }}"
                                data-i18n="nav.footers.footer_light">عرض كلمة مؤسس المبادرة 
                            </a>
                        </li>
                       
                        <li><a class="menu-item" href="{{ route('dashboard.founder_speech.create') }}"
                                data-i18n="nav.footers.footer_dark"> اضافة كلمة مؤسس المبادرة
                            </a>
                        </li>
                       
                    </ul>
                </li>


                <li class=" nav-item"><a href="#"><i class="la la-download"></i><span class="menu-title"
                            data-i18n="nav.footers.main">سوشال ميديا</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="{{ route('dashboard.manageFront.footer') }}"
                                data-i18n="nav.dash.crypto">روابط السوشال ميديا
                            </a>
                        </li>
                    </ul>
                </li>






            </ul>
        </div>
    </div>
