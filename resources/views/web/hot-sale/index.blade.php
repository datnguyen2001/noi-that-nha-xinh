@extends('web.index')
@section('title','Hot sale')

{{--content of page--}}
@section('content')
    <div id="content" class="site-content">
        <div class="product-wrap hot-sale">
            <div class="container">
                @if(isset($banner_sale))
                <div class="banner-wrap">
                    <noscript>
                        <img decoding="async" width="100%" height="100%" loading="lazy" alt="Banner"
                             data-src="{{asset($banner_sale->src)}}"
                             class="lazyloaded"
                             src="{{asset($banner_sale->src)}}"/>
                    </noscript>
                    <img decoding="async" width="100%" height="100%" loading="lazy" alt="Banner"
                         data-src="{{asset($banner_sale->src)}}"
                         class="lazyloaded"
                         src="{{asset($banner_sale->src)}}"/>
                </div>
                @endif
                <div class="tab-panels">
                    <div class="sh-product-shortcode column-3">
                        <ul class="row list-products d-flex flex-wrap">
                            @foreach($product_sale as $sale)
                            <li class="6800 product type-product post-6799 status-publish first instock product_cat-phong-khach-tan-co-dien-ha-anh product_cat-sofa-tan-co-dien has-post-thumbnail shipping-taxable product-type-simple col-4">
                                <div class="wrap-product">
                                    <div class="image-product">
                                        <a class="img hover-zoom" href="https://goocchohaanh.com/product/sofa-go-oc-cho-bo-roma-01/" title="{{$sale->name}}">
                                            <noscript><img width="100%" height="100%"
                                                           alt="{{$sale->name}}" decoding="async"
                                                           data-srcset="{{asset($sale->src)}}"
                                                           data-src="{{asset($sale->src)}}"
                                                           data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                           class="attachment-full size-full wp-post-image lazyloaded"
                                                           src="{{asset($sale->src)}}"/>
                                            </noscript>
                                            <img width="100%" height="100%" alt="{{$sale->name}}"
                                                 decoding="async"
                                                 data-srcset="{{asset($sale->src)}}"
                                                 data-src="{{asset($sale->src)}}"
                                                 data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                 class="attachment-full size-full wp-post-image lazyloaded"
                                                 src="{{asset($sale->src)}}"/>
                                        </a>
                                    </div>
                                    <h3 class="woocommerce-loop-product__title">
                                        <a class="img hover-zoom"
                                           href="https://goocchohaanh.com/product/sofa-go-oc-cho-bo-roma-01/"
                                           title="{{$sale->name}}">{{$sale->name}}
                                        </a>
                                    </h3>
                                    <div class="price_pro">
                                        <p class="price_regular i3">@if($sale->pricing == 1)Giá: <ins>Liên hệ</ins>@endif
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
