<header id="masthead" class="site-header header-logo-style2 header-banner" role="banner" itemscope="itemscope"
        itemtype="http://schema.org/WPHeader">

    <div class="header-main">
        <div class="container">
            <div class="site-branding">
                <h1 class="site-title">
                    <a href="{{route('home')}}" rel="home">Nhà xinh; Nội thất đồ gỗ óc chó cao cấp đẹp tại Việt Nam</a>
                </h1>
            </div>

            <div class="header-content">
                <div class="row align-items-center">
                    <div class="col-md-3" style="z-index: 10">
                        <div class="video_block">
                            <a href="{{route('introduction')}}">
                                Trải nghiệm video
                            </a>
                        </div>
                        <div class="lien_he">
                            <a href="{{route('lien-he')}}">
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
                    <div class="col-md-3" style="z-index: 10">
                        <div class="camera_block" data-bs-toggle="offcanvas"
                             data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <a class="cart">Giỏ hàng</a>
                        </div>
                        <div class="information-phone">
                            <a href="tel:{{@$setting->hotline}}">
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
                           data-src="{{asset(@$setting->logo)}}"
                           class="lazyload"
                           src="{{asset(@$setting->logo)}}">
            </noscript>
            <img decoding="async" alt="logo" width="100%" height="100%"
                 data-src="{{asset(@$setting->logo)}}"
                 class="lazyloaded"
                 src="{{asset(@$setting->logo)}}"></div>
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
                        @if(isset($data_header))
                            @foreach($data_header as $menus)
                        <li id="menu-item-10839"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-10839">
                            <a href="{{ route('menu',$menus->slug) }}">{{$menus->name}}</a>
                            @if(isset($menus->cate1) && count($menus->cate1)>0)
                            <ul class="sub-menu">
                                @foreach($menus->cate1 as $cate1)
                                <li id="menu-item-11245"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-11245">
                                    <a href="{{ route('category',$cate1->slug) }}">{{$cate1->name}}</a>
                                    @if(isset($cate1->category) && count($cate1->category))
                                    <ul class="sub-menu">
                                        @foreach($cate1->category as $cate2)
                                        <li id="menu-item-11246"
                                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11246">
                                            <a href="{{ route('category-product',$cate2->slug) }}">{{$cate2->name}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                        @endif
                                </li>
                                    @endforeach
                            </ul>
                                @endif
                        </li>
                            @endforeach
                        @endif
                        <li id="menu-item-1600" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1600">
                            <a href="{{route('du-an.index')}}">Dự án</a>
                            @if(isset($project) && count($project)>0)
                            <ul class="sub-menu">
                                @foreach($project as $projects)
                                <li id="menu-item-1825" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1825">
                                    <a href="{{route('du-an.details',$projects->slug)}}">{{$projects->name}}</a>
                                </li>
                                    @endforeach
                            </ul>
                                @endif
                        </li>
                        <li id="menu-item-10996" class="menu-item menu-item-type-taxonomy menu-item-object-bst_type menu-item-10996">
                            <a href="{{route('bo-suu-tap.index')}}">Bộ sưu tập</a>
                        </li>
                        <li id="menu-item-8645" class="menu-item menu-item-type-post_type menu-item-object-video menu-item-8645">
                            <a href="{{route('introduction')}}">Video</a>
                        </li>
                        <li id="menu-item-10997"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10997">
                            <a href="{{route('tin-tuc')}}">Tin tức &#8211; liên hệ</a>
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

<div class="offcanvas offcanvas-end box-offcanvas-attribute" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" >
    <div class="offcanvas-header header_cart" >
        <h5 class="offcanvas-title text-center w-100 text-white" id="offcanvasRightLabel" style="padding-left: 20px">Giỏ hàng</h5>
        <button type="button" class="btn-close-cart" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body list_carts" style="z-index: 2000000">

    </div>
</div>
