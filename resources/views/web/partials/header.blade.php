<header id="masthead" class="site-header header-logo-style2 header-banner" role="banner" itemscope="itemscope"
        itemtype="http://schema.org/WPHeader">

    <div class="header-main">
        <div class="container">
            <div class="site-branding">
                <h1 class="site-title">
                    <a href="{{route('home')}}" rel="home">Ha Anh Interior &#8211; Nội thất đồ gỗ óc chó cao cấp đẹp tại Việt Nam</a>
                </h1>
            </div>

            <div class="header-content">
{{--                <a id="showmenu-header" class="d-lg-none">--}}
{{--                    <span class="hamburger hamburger--collapse">--}}
{{--                        <span class="hamburger-box">--}}
{{--                            <span class="hamburger-inner"></span>--}}
{{--                        </span>--}}
{{--                    </span>--}}
{{--                </a>--}}
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="camera_block mb-5">
{{--                            <a href="{{route('cameraVideo')}}">Camera 360--}}
{{--                                <i class="fas fa fa-globe"></i>--}}
{{--                            </a>--}}
                        </div>
                        <div class="lien_he">
                            <a href="{{route('lien-he')}}">
{{--                                <i class="fas fa-envelope"></i> --}}
                                ĐĂNG KÝ NHẬN ƯU ĐÃI
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="logo">
                            <div class="slogan_block">
                                <span> {{@$setting->name_header}} </span>
                            </div>
                            <a href="{{route('home')}}">
                                <noscript><img decoding="async" alt="logo" width="100%" height="100%"
                                               data-src="{{asset(@$setting->logo)}}"
                                               class="lazyload"
                                               src="{{asset(@$setting->logo)}}">
                                </noscript>
                                <img decoding="async" alt="logo" width="100%" height="100%"
                                     data-src="{{asset(@$setting->logo)}}"
                                     class="lazyloaded"
                                     src="{{asset(@$setting->logo)}}"></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="video_block">
                            <a href="{{route('introduction')}}">
                                Trải nghiệm video
                            </a>
                        </div>
                        <div class="information-phone">
                            <a href="tel:{{@$setting->hotline}}">
{{--                                <i class="fas fa-phone"></i>--}}
                                <span>Hotline:{{@$setting->hotline}}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Start Menu Mobile  fixed-top -->
    <div class="navbar d-flex align-items-center d-lg-none">
        <a id="showmenu" class="">
            <span class="hamburger hamburger--collapse">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </span>
            <strong>MENU</strong>
        </a>
        <div class="logo_mobile">
            <noscript><img decoding="async" alt="logo" width="100%" height="100%"
                           data-src="{{asset('assets/images/logo-haanh.png')}}"
                           class="lazyload"
                           src="{{asset('assets/images/logo-haanh.png')}}">
            </noscript>
            <img decoding="async" alt="logo" width="100%" height="100%"
                 data-src="{{asset('assets/images/logo-haanh.png')}}"
                 class="lazyloaded"
                 src="{{asset('assets/images/logo-haanh.png')}}"></div>
    </div>
    <nav id="site-navigation" class="main-navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <div class="mobilenav__inner">
            <div class="container">
                <div class="menu-top-menu-container">
                    <ul id="primary-menu" class="menu clearfix">
                        <li id="menu-item-818"
                            class="li-home menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-818">
                            <a href="{{route('home')}}" aria-current="page"><span>Trang chủ</span></a></li>
                        <li id="menu-item-6377"
                            class="hotsale menu-item menu-item-type-post_type menu-item-object-page menu-item-6377">
                            <a href="{{route('hot-sale')}}">Hot Sale</a></li>
                        <li id="menu-item-10839"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-10839">
                            <a href="{{ route('noi-that-go-oc-cho.home') }}">Nội thất gỗ óc chó</a>
                            <ul class="sub-menu">
                                <li id="menu-item-11245"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11245">
                                    <a href="{{ route('noi-that-go-oc-cho.phong-khach.index') }}">Phòng Khách Gỗ Óc
                                        Chó</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-11246"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11246">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-khach.sofa') }}">Sofa Gỗ Óc Chó</a>
                                        </li>
                                        <li id="menu-item-11247"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11247">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-khach.ban-tra') }}">Bàn Trà Gỗ
                                                Óc Chó</a></li>
                                        <li id="menu-item-11248"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11248">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-khach.ke-tivi') }}">Kệ Tivi Gỗ Óc
                                                Chó</a></li>
                                        <li id="menu-item-11249"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11249">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-khach.ke-trang-tri') }}">Kệ Trang
                                                Trí Gỗ Óc Chó</a></li>
                                    </ul>
                                </li>
                                <li id="menu-item-11254" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11254">
                                    <a href="{{ route('noi-that-go-oc-cho.phong-bep.index') }}">Phòng bếp gỗ óc chó</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-11255" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11255">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-bep.ban-ghe-an') }}">Bàn Ghế Ăn Gỗ Óc Chó</a>
                                        </li>
                                        <li id="menu-item-11256" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11256">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-bep.tu-bep') }}">Tủ Bếp Gỗ Óc Chó</a>
                                        </li>
                                        <li id="menu-item-11257" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11257">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-bep.quay-bar') }}">Quầy Bar Gỗ Óc Chó</a>
                                        </li>
                                        <li id="menu-item-11258" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11258">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-bep.tu-ruou') }}">Tủ Rượu Gỗ Óc Chó</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-11250" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11250">
                                    <a href="{{ route('noi-that-go-oc-cho.phong-ngu.index') }}">Phòng ngủ gỗ óc chó</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-11251" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11251">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-ngu.giuong-ngu') }}">Giường Ngủ Gỗ Óc Chó</a>
                                        </li>
                                        <li id="menu-item-11252" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11252">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-ngu.ban-trang-diem') }}">Bàn Trang Điểm Gỗ Óc Chó</a>
                                        </li>
                                        <li id="menu-item-11253" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11253">
                                            <a href="{{ route('noi-that-go-oc-cho.phong-ngu.tu-quan-ao') }}">Tủ Áo Gỗ Óc Chó</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li id="menu-item-6736" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-6736">
                            <a href="{{ route('noi-that-tan-co-dien.home') }}">Nội thất tân cổ điển</a>
                            <ul class="sub-menu">
                                <li id="menu-item-11232" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11232">
                                    <a href="{{ route('noi-that-tan-co-dien.phong-khach.index') }}">Phòng Khách Tân Cổ Điển</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-11233" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11233">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-khach.sofa') }}">Sofa tân cổ điển</a>
                                        </li>
                                        <li id="menu-item-11234" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11234">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-khach.ban-tra') }}">Bàn trà tân cổ điển</a>
                                        </li>
                                        <li id="menu-item-11235" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11235">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-khach.ke-tivi') }}">Kệ tivi tân cổ điển</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-11240" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11240">
                                    <a href="{{ route('noi-that-tan-co-dien.phong-bep.index') }}">Phòng Bếp Tân Cổ Điển</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-11241" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11241">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-bep.ban-ghe-an') }}">Bàn ghế ăn tân cổ điển</a>
                                        </li>
                                        <li id="menu-item-11242" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11242">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-bep.tu-bep') }}">Tủ bếp tân cổ điển</a>
                                        </li>
                                        <li id="menu-item-11243" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11243">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-bep.quay-bar') }}">Quầy bar tân cổ điển</a>
                                        </li>
                                        <li id="menu-item-11244" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11244">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-bep.tu-ruou') }}">Tủ rượu tân cổ điển</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-11236" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11236">
                                    <a href="{{ route('noi-that-tan-co-dien.phong-ngu.index') }}">Phòng Ngủ Tân Cổ Điển</a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-11237" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11237">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-ngu.giuong-ngu') }}">Giường ngủ tân cổ điển</a>
                                        </li>
                                        <li id="menu-item-11238" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11238">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-ngu.ban-trang-diem') }}">Bàn trang điểm tân cổ điển</a>
                                        </li>
                                        <li id="menu-item-11239" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11239">
                                            <a href="{{ route('noi-that-tan-co-dien.phong-ngu.tu-quan-ao') }}">Tủ áo tân cổ điển</a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-6339" class="menu-item menu-item-type-taxonomy menu-item-object-dich_vu menu-item-6339">
                                    <a href="{{ route('noi-that-tan-co-dien.tu-van') }}">Tư vấn</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-8783"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-8783">
                            <a href="{{route('phong-tho.ban-tho')}}">Phòng Thờ</a>
                            <ul class="sub-menu">
                                <li id="menu-item-6737"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-6737">
                                    <a href="{{route('phong-tho.ban-tho')}}">Bàn Thờ</a></li>
                                <li id="menu-item-6738"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-6738">
                                    <a href="{{route('phong-tho.don-tho')}}">Đôn thờ</a></li>
                                <li id="menu-item-6739"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-6739">
                                    <a href="{{route('phong-tho.vach-tho')}}">Vách thờ</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-1600" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1600">
                            <a href="{{route('du-an.index')}}">Dự án</a>
                            <ul class="sub-menu">
                                <li id="menu-item-1825" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1825">
                                    <a href="{{route('du-an.du-an-thiet-ke')}}">Dự án thiết kế</a>
                                </li>
                                <li id="menu-item-1826" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1826">
                                    <a href="{{route('du-an.du-an-thi-cong')}}">Dự án thi công</a>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-10996" class="menu-item menu-item-type-taxonomy menu-item-object-bst_type menu-item-10996">
                            <a href="{{route('bo-suu-tap.index')}}">Bộ sưu tập</a>
                        </li>
                        <li id="menu-item-8645" class="menu-item menu-item-type-post_type menu-item-object-video menu-item-8645">
                            <a href="{{route('introduction')}}">Video</a>
                        </li>
                        <li id="menu-item-10997"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10997">
                            <a href="#">Tin tức &#8211; liên hệ</a>
                            <ul class="sub-menu">
                                <li id="menu-item-2978"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-tu_van menu-item-2978">
                                    <a href="{{route('tin-tuc')}}">Tin tức</a></li>
                                <li id="menu-item-5614"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5614">
                                    <a href="{{route('lien-he')}}">Liên hệ</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="menu_close d-lg-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFFFF" class="bi bi-x-lg"
                     viewBox="0 0 16 16">
                    <path
                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                </svg>
            </a>
        </div>
    </nav>
</header>
