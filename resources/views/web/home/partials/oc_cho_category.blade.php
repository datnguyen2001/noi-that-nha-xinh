<div class="product-wrap">
    <div class="container">
        <h2 class="heading">
            <a href="{{route('menu',$val->slug)}}">{{$val->name}}</a>
        </h2>
        <div class="list-categories__wrap nav-tabs">
            @foreach($val->category as $cate)
            <div class="list-categories__item item">
                <div class="name">
                    <a class="item-button" href="{{route('category',$cate->slug)}}" title="{{$cate->name}}">
                        <span>{{$cate->name}}</span>
                    </a>
                </div>
            </div>
                @endforeach
        </div>
        <div class="tab-panels">
            <div class="sh-product-shortcode column-3">
                <ul class="row list-products d-flex flex-wrap">
                    @foreach($val->product as $pro_cate1)
                    <li class="6800 product type-product post-6799 status-publish first instock product_cat-phong-khach-tan-co-dien-ha-anh product_cat-sofa-tan-co-dien has-post-thumbnail shipping-taxable product-type-simple col-4">
                        <div class="wrap-product">
                            <div class="image-product">
                                <a class="img hover-zoom" href="https://goocchohaanh.com/product/sofa-go-oc-cho-bo-roma-01/" title="SOFA GỖ ÓC CHÓ ROMA 01">
                                    <noscript><img width="100%" height="100%"
                                                   alt="{{$pro_cate1->name}}" decoding="async"
                                                   data-srcset="{{asset($pro_cate1->src)}}"
                                                   data-src="{{asset($pro_cate1->src)}}"
                                                   data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                   class="attachment-full size-full wp-post-image lazyloaded"
                                                   src="{{asset($pro_cate1->src)}}"/>
                                    </noscript>
                                    <img width="100%" height="100%" alt="SOFA GỖ ÓC CHÓ ROMA 01"
                                         decoding="async"
                                         data-srcset="{{asset($pro_cate1->src)}}"
                                         data-src="{{asset($pro_cate1->src)}}"
                                         data-sizes="(max-width: 1920px) 100vw, 1920px"
                                         class="attachment-full size-full wp-post-image lazyloaded"
                                         src="{{asset($pro_cate1->src)}}"/>
                                </a>
                            </div>
                            <h3 class="woocommerce-loop-product__title">
                                <a class="img hover-zoom"
                                   href="https://goocchohaanh.com/product/sofa-go-oc-cho-bo-roma-01/"
                                   title="{{$pro_cate1->name}}">{{$pro_cate1->name}}
                                </a>
                            </h3>
                            <div class="price_pro">
                                <p class="price_regular i3">@if($pro_cate1->pricing == 1)Giá: <ins>Liên hệ</ins>@endif
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="product-wrap__link text-center">
                <a href="{{route('menu',$val->slug)}}">
                    Xem thêm
                </a>
            </div>
        </div>
    </div>
</div>
