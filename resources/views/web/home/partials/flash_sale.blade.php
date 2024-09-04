@if(isset($product_sale) && count($product_sale)>0)
<div class="container">
    <div class="col-lg-6 col-12 box_heading"><h2 class="heading">Sản phẩm Sale sốc</h2>
    </div>
    <div class="sale-wrap">
        <div class="product-categories sh-product-shortcode">
            <ul class="slick-carousel-flash-sales list-products d-flex">
                @foreach($product_sale as $pro)
                <li class="product type-product product-6841 col-4">
                    <div class="wrap-product">
                        <div class="image-product">
                            <a class="img hover-zoom" href="{{ route('product-detail', $pro->slug) }}">
                                <noscript><img width="100%" height="100%" alt="{{$pro->name}}" decoding="async" fetchpriority="high" data-srcset="{{asset($pro->src)}}" data-src="{{asset($pro->src)}}" data-sizes="(max-width: 1920px) 100vw, 1920px" class="attachment-large size-large wp-post-image lazyloaded" src="{{asset($pro->src)}}"/></noscript>
                                <img width="100%" height="100%" alt="{{$pro->name}}" decoding="async" fetchpriority="high" data-srcset="{{asset($pro->src)}}" data-src="{{asset($pro->src)}}" data-sizes="(max-width: 1920px) 100vw, 1920px" class="attachment-large size-large wp-post-image lazyloaded" src="{{asset($pro->src)}}"/>
                            </a>
                        </div>
                        <h3 class="woocommerce-loop-product__title">
                            <a title="" href="{{route('product-detail', $pro->slug)}}">
                                {{$pro->name}}
                            </a>
                        </h3>
                        <div class="price_pro">
                            @if($pro->price || $pro->price_promotional )
                                <p class="price_sale mb-1">Giá Bán: <del><span class="woocommerce-Price-amount amount"><bdi>{{number_format($pro->price)}}<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></del></p>
                                <p class="price_sale">Giá KM: <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($pro->price_promotional)}}<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></ins></p>
                            @else
                            <p class="price_regular i3">@if($pro->pricing == 1)Giá: <ins>Liên hệ</ins>@endif</p>
                                @endif
                        </div>
                    </div>
                </li>
                    @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slick-carousel-flash-sales').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
