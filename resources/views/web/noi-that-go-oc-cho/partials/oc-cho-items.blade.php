@if(isset($category) && count($category)>0)
    @foreach($category as $cate)
<div class="product__block categories_product">
    <div class="container">
        <div class="row">
            <div class="col-12 box_cat_pro">
                <h2 class="woocommerce-products-header__title">
                    <a class="title_procat" href=https://goocchohaanh.com/phong-khach-go-oc-cho-dep/>{{$cate->name}}</a>
                    <a class="xemtatca d-md-block d-none" href=https://goocchohaanh.com/phong-khach-go-oc-cho-dep/>Xem tất cả</a>
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
