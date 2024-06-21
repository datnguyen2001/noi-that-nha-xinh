{{--@extends('web.index')--}}
{{--@section('title','Chi tiết Sản phẩm')--}}

{{--content of page--}}
{{--@section('content')--}}
{{--    <div id="content" class="site-content" style="padding-top: 30px">--}}
{{--        <div class="container">--}}
{{--            <div class="content-sidebar-wrap">--}}
{{--                <main id="main" class="site-main" role="main">--}}
{{--                    <header class="woocommerce-products-header">--}}
{{--                        <h1 class="woocommerce-products-header__title page-title">--}}
{{--                            <span>{{$productDetails->category->name ?? ''}}</span>--}}
{{--                        </h1>--}}
{{--                    </header>--}}
{{--                    <div class="list-categories tan_co">--}}
{{--                        <div class="list-categories__wrap">--}}
{{--                            @foreach($relatedCategories as $relatedCategorie)--}}
{{--                                <div class="list-categories__item">--}}
{{--                                    <a class="d-block" href="{{route('category-product', [$relatedCategorie->slug])}}">--}}
{{--                                        {{$relatedCategorie->name ?? ''}}--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product__block">--}}
{{--                        <div class="d-flex align-items-center switcher-wrap">--}}
{{--                            <div class="woocommerce-notices-wrapper"></div>--}}
{{--                        </div>--}}
{{--                        <div class="sh-product-shortcode column-3">--}}
{{--                            <ul class="row list-products">--}}
{{--                                <li class="product type-product post-7896 status-publish first instock product_cat-phong-khach-go-oc-cho product_cat-sofa-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">--}}
{{--                                    <div class="wrap-product">--}}
{{--                                        <div class="image-product">--}}
{{--                                            <a class="img hover-zoom"  href="https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/" title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025">--}}
{{--                                                <img width="100%" height="100%"--}}
{{--                                                     alt="" decoding="async" fetchpriority="high"--}}
{{--                                                     data-srcset="https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2.png 1920w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-768x432.png 768w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-1536x864.png 1536w"--}}
{{--                                                     data-src="{{asset('assets/images/sofa.png')}}"--}}
{{--                                                     data-sizes="(max-width: 1920px) 100vw, 1920px"--}}
{{--                                                     class="attachment-full size-full lazyloaded"--}}
{{--                                                     src="{{asset('assets/images/sofa.png')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <h3 class="woocommerce-loop-product__title">--}}
{{--                                            <a title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025"--}}
{{--                                               href=" https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/ ">--}}
{{--                                                SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025--}}
{{--                                            </a>--}}
{{--                                        </h3>--}}
{{--                                        <div class="price_pro">--}}
{{--                                            <p class="price_regular i3">Giá: <ins>Liên hệ</ins></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="product type-product post-7896 status-publish first instock product_cat-phong-khach-go-oc-cho product_cat-sofa-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">--}}
{{--                                    <div class="wrap-product">--}}
{{--                                        <div class="image-product">--}}
{{--                                            <a class="img hover-zoom"  href="https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/" title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025">--}}
{{--                                                <img width="100%" height="100%"--}}
{{--                                                     alt="" decoding="async" fetchpriority="high"--}}
{{--                                                     data-srcset="https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2.png 1920w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-768x432.png 768w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-1536x864.png 1536w"--}}
{{--                                                     data-src="{{asset('assets/images/sofa.png')}}"--}}
{{--                                                     data-sizes="(max-width: 1920px) 100vw, 1920px"--}}
{{--                                                     class="attachment-full size-full lazyloaded"--}}
{{--                                                     src="{{asset('assets/images/sofa.png')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <h3 class="woocommerce-loop-product__title">--}}
{{--                                            <a title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025"--}}
{{--                                               href=" https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/ ">--}}
{{--                                                SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025--}}
{{--                                            </a>--}}
{{--                                        </h3>--}}
{{--                                        <div class="price_pro">--}}
{{--                                            <p class="price_regular i3">Giá: <ins>Liên hệ</ins></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="product type-product post-7896 status-publish first instock product_cat-phong-khach-go-oc-cho product_cat-sofa-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">--}}
{{--                                    <div class="wrap-product">--}}
{{--                                        <div class="image-product">--}}
{{--                                            <a class="img hover-zoom"  href="https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/" title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025">--}}
{{--                                                <img width="100%" height="100%"--}}
{{--                                                     alt="" decoding="async" fetchpriority="high"--}}
{{--                                                     data-srcset="https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2.png 1920w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-768x432.png 768w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-1536x864.png 1536w"--}}
{{--                                                     data-src="{{asset('assets/images/sofa.png')}}"--}}
{{--                                                     data-sizes="(max-width: 1920px) 100vw, 1920px"--}}
{{--                                                     class="attachment-full size-full lazyloaded"--}}
{{--                                                     src="{{asset('assets/images/sofa.png')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <h3 class="woocommerce-loop-product__title">--}}
{{--                                            <a title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025"--}}
{{--                                               href=" https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/ ">--}}
{{--                                                SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025--}}
{{--                                            </a>--}}
{{--                                        </h3>--}}
{{--                                        <div class="price_pro">--}}
{{--                                            <p class="price_regular i3">Giá: <ins>Liên hệ</ins></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="product type-product post-7896 status-publish first instock product_cat-phong-khach-go-oc-cho product_cat-sofa-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">--}}
{{--                                    <div class="wrap-product">--}}
{{--                                        <div class="image-product">--}}
{{--                                            <a class="img hover-zoom"  href="https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/" title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025">--}}
{{--                                                <img width="100%" height="100%"--}}
{{--                                                     alt="" decoding="async" fetchpriority="high"--}}
{{--                                                     data-srcset="https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2.png 1920w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-768x432.png 768w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-1536x864.png 1536w"--}}
{{--                                                     data-src="{{asset('assets/images/sofa.png')}}"--}}
{{--                                                     data-sizes="(max-width: 1920px) 100vw, 1920px"--}}
{{--                                                     class="attachment-full size-full lazyloaded"--}}
{{--                                                     src="{{asset('assets/images/sofa.png')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <h3 class="woocommerce-loop-product__title">--}}
{{--                                            <a title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025"--}}
{{--                                               href=" https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/ ">--}}
{{--                                                SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025--}}
{{--                                            </a>--}}
{{--                                        </h3>--}}
{{--                                        <div class="price_pro">--}}
{{--                                            <p class="price_regular i3">Giá: <ins>Liên hệ</ins></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="product type-product post-7896 status-publish first instock product_cat-phong-khach-go-oc-cho product_cat-sofa-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">--}}
{{--                                    <div class="wrap-product">--}}
{{--                                        <div class="image-product">--}}
{{--                                            <a class="img hover-zoom"  href="https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/" title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025">--}}
{{--                                                <img width="100%" height="100%"--}}
{{--                                                     alt="" decoding="async" fetchpriority="high"--}}
{{--                                                     data-srcset="https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2.png 1920w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-768x432.png 768w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-1536x864.png 1536w"--}}
{{--                                                     data-src="{{asset('assets/images/sofa.png')}}"--}}
{{--                                                     data-sizes="(max-width: 1920px) 100vw, 1920px"--}}
{{--                                                     class="attachment-full size-full lazyloaded"--}}
{{--                                                     src="{{asset('assets/images/sofa.png')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <h3 class="woocommerce-loop-product__title">--}}
{{--                                            <a title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025"--}}
{{--                                               href=" https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/ ">--}}
{{--                                                SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025--}}
{{--                                            </a>--}}
{{--                                        </h3>--}}
{{--                                        <div class="price_pro">--}}
{{--                                            <p class="price_regular i3">Giá: <ins>Liên hệ</ins></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="product type-product post-7896 status-publish first instock product_cat-phong-khach-go-oc-cho product_cat-sofa-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">--}}
{{--                                    <div class="wrap-product">--}}
{{--                                        <div class="image-product">--}}
{{--                                            <a class="img hover-zoom"  href="https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/" title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025">--}}
{{--                                                <img width="100%" height="100%"--}}
{{--                                                     alt="" decoding="async" fetchpriority="high"--}}
{{--                                                     data-srcset="https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2.png 1920w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-768x432.png 768w, https://goocchohaanh.com/wp-content/uploads/2023/08/HK-60025-1-2-1536x864.png 1536w"--}}
{{--                                                     data-src="{{asset('assets/images/sofa.png')}}"--}}
{{--                                                     data-sizes="(max-width: 1920px) 100vw, 1920px"--}}
{{--                                                     class="attachment-full size-full lazyloaded"--}}
{{--                                                     src="{{asset('assets/images/sofa.png')}}" />--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <h3 class="woocommerce-loop-product__title">--}}
{{--                                            <a title="SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025"--}}
{{--                                               href=" https://goocchohaanh.com/product/sofa-go-oc-cho-tu-nhien-hk-60025/ ">--}}
{{--                                                SOFA GỖ ÓC CHÓ TỰ NHIÊN HK – 60025--}}
{{--                                            </a>--}}
{{--                                        </h3>--}}
{{--                                        <div class="price_pro">--}}
{{--                                            <p class="price_regular i3">Giá: <ins>Liên hệ</ins></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </main>--}}
{{--            </div>--}}
{{--            <div class="block_general">--}}
{{--                @include('web.noi-that-go-oc-cho.details.partials.block-general')--}}
{{--                @include('web.contact.partials.contact-global')--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
