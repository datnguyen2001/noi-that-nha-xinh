@extends('web.index')
@section('title',$menu->name)

{{--content of page--}}
@section('content')
    <div id="content" class="site-content" style="padding-top: 30px">
        <div class="container">
            <div class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    <header class="woocommerce-products-header">
                        <h1 class="woocommerce-products-header__title page-title">
                            <span>{{$menu->name}}</span>
                        </h1>
                    </header>
                    @if(isset($category))
                    <div class="list-categories tan_co 123">
                        <div class="container">
                            <div class="list-categories__wrap">
                                @foreach($category as $categorys)
                                <div class="list-categories__item">
                                    <a class="d-block" href="{{ route('category-product',$categorys->slug) }}">{{$categorys->name}}</a>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(isset($category) && count($category)>0)
                        @foreach($category as $cate)
                            <div class="product__block categories_product">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 box_cat_pro">
                                            <h2 class="woocommerce-products-header__title">
                                                <a class="title_procat" href={{ route('category-product',$cate->slug) }}>{{$cate->name}}</a>
                                                <a class="xemtatca d-md-block d-none" href={{ route('category-product',$cate->slug) }}>Xem tất cả</a>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="sh-product-shortcode column-3">
                                        <ul class="row list-products">
                                            @foreach($cate->product as $pro)
                                                <li class="product type-product post-7896 status-publish first instock product_cat-phong-khach-go-oc-cho product_cat-sofa-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">
                                                    <div class="wrap-product">
                                                        <div class="image-product">
                                                            <a class="img hover-zoom"  href="https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/" title="{{$pro->name}}">
                                                                <img width="100%" height="100%"
                                                                     alt="" decoding="async" fetchpriority="high"
                                                                     data-srcset="{{asset($pro->src)}}"
                                                                     data-src="{{asset($pro->src)}}"
                                                                     data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                                     class="attachment-full size-full lazyloaded"
                                                                     src="{{asset($pro->src)}}" />
                                                            </a>
                                                        </div>
                                                        <h3 class="woocommerce-loop-product__title">
                                                            <a title="{{$pro->name}}"
                                                               href=" https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/ ">
                                                                {{$pro->name}}
                                                            </a>
                                                        </h3>
                                                        <div class="price_pro">
                                                            <p class="price_regular i3">@if($pro->pricing == 1)Giá: <ins>Liên hệ</ins>@endif</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </main>
            </div>
            <div class="block_general">
                <div class="page_content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="expand_description">
                                <div class="expand_description__wrap" style="height: 1090px">
                                    <h2 class="heading-left"> {{$menu->name}} </h2>
                                    <div id="fb-root" class="fb-reset">
                                        {!! @$menu->content !!}
                                    </div>
                                </div>
                                <div class="expand_description__readmore remore_more">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            @include('web.partials.extra-information')
                        </div>
                    </div>
                </div>
                @include('web.contact.partials.contact-global')
            </div>
        </div>
    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    jQuery(document).ready(function () {
        jQuery(".expand_description").length > 0 && (jQuery(".expand_description__wrap").height(1090), jQuery(".expand_description").append(function () {
            return '<div class="expand_description__readmore remore_more"><a title="Xem th\xeam" href="javascript:void(0);">Xem th\xeam</a></div>'
        }), jQuery(".expand_description").append(function () {
            return '<div class="expand_description__readmore remore_less" style="display: none;"><a title="Xem th\xeam" href="javascript:void(0);">Thu gọn</a></div>'
        }), jQuery("body").on("click", ".remore_more", function () {
            jQuery(".expand_description__wrap").removeAttr("style"), jQuery(".remore_more").hide(), jQuery(".remore_less").show()
        }), jQuery("body").on("click", ".remore_less", function () {
            jQuery(".expand_description__wrap").height(1090), jQuery(".remore_less").hide(), jQuery(".remore_more").show()
        })), jQuery().slick && jQuery(".slick-carousel").each(function () {
            var e = jQuery(this).data("item") ? jQuery(this).data("item") : 1,
                i = jQuery(this).data("item_md") ? jQuery(this).data("item_md") : 2,
                a = jQuery(this).data("item_sm") ? jQuery(this).data("item_sm") : 2,
                o = jQuery(this).data("item_mb") ? jQuery(this).data("item_mb") : 1,
                t = jQuery(this).data("row") ? jQuery(this).data("row") : 1,
                s = !!jQuery(this).data("arrows") && jQuery(this).data("arrows"),
                r = !!jQuery(this).data("dots") && jQuery(this).data("dots"),
                n = !!jQuery(this).data("vertical") && jQuery(this).data("vertical");
            autoplay = !!jQuery(this).data("autoplay") && jQuery(this).data("autoplay"), fade = !!jQuery(this).data("fade") && jQuery(this).data("fade"), jQuery(this).slick({
                autoplay: autoplay,
                dots: r,
                arrows: s,
                infinite: !0,
                autoplaySpeed: 3e3,
                speed: 1500,
                vertical: n,
                slidesToShow: e,
                slidesToScroll: 1,
                lazyLoad: "ondemand",
                fade: fade,
                cssEase: "linear",
                rows: t,
                responsive: [{breakpoint: 1200, settings: {slidesToShow: i, slidesToScroll: 1}}, {
                    breakpoint: 600,
                    settings: {slidesToShow: a, slidesToScroll: 1}
                }, {breakpoint: 576, settings: {slidesToShow: o, slidesToScroll: 1}},]
            })
        }), jQuery(".navbar #showmenu").click(function () {
            jQuery("body").toggleClass("show-menu-mobile"), jQuery(".main-navigation").toggleClass("opened"), jQuery(".panel-overlay").toggleClass("active"), jQuery(".hamburger", this).toggleClass("is-active")
        }), jQuery(".panel-overlay,.menu_close").click(function () {
            jQuery(".main-navigation").toggleClass("opened"), jQuery(".panel-overlay").removeClass("active"), jQuery(".navbar #showmenu .hamburger").removeClass("is-active"), jQuery("body").toggleClass("show-menu-mobile")
        }), jQuery(".main-navigation ul.sub-menu").before('<span class="arrow"></span>'), jQuery("body").on("click", ".main-navigation .arrow", function () {
            jQuery(this).parent("li").toggleClass("open"), jQuery(this).parent("li").find("ul.sub-menu").first().slideToggle("normal")
        }), jQuery("input").attr("autocomplete", "off"), jQuery(window).bind("scroll", function () {
            jQuery(window).scrollTop() > 80 ? jQuery(".main-navigation").addClass("fixed") : jQuery(".main-navigation").removeClass("fixed")
        }), jQuery(window).on("load", function () {
            if (jQuery(".archive-description").length > 0) {
                var e, i = jQuery(".archive-description");
                i.height() > 500 && (i.css("height", "500px"), i.append(function () {
                    return '<div class="archive-description_more archive-description_more_show"><a title="Xem th\xeam" href="javascript:void(0);">Xem th\xeam</a></div>'
                }), i.append(function () {
                    return '<div class="archive-description_more archive-description_more_less" style="display: none"><a title="Thu gọn" href="javascript:void(0);">Thu gọn</a></div>'
                }), jQuery("body").on("click", ".archive-description_more_show", function () {
                    i.removeAttr("style"), jQuery("body .archive-description_more_show").hide(), jQuery("body .archive-description_more_less").show()
                }), jQuery("body").on("click", ".archive-description_more_less", function () {
                    i.css("height", "500px"), jQuery("body .archive-description_more_show").show(), jQuery("body .archive-description_more_less").hide()
                }))
            }
        })
    });
</script>
