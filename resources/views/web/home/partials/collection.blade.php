@if(isset($collection)&& count($collection))
<div class="container">
    <div class="setofproduct-wrap">
        <h2 class="heading">
            <span>
                 <a href="{{route('bo-suu-tap.index')}}">Bộ sản phẩm mới độc quyền</a>
            </span>
        </h2>
        <div class="row">
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="sh-product-shortcode list2 column-1">
                    <ul class="row list-products grid p-0">
                        @if(isset($collection[0]))
                        <li class="product type-product product-11118">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="{{route('bo-suu-tap-details', $collection[0]->slug)}}">
                                        <noscript>
                                            <img width="100%" height="100%"
                                                       alt="{{$collection[0]->name}}"
                                                       decoding="async"
                                                       data-srcset="$collection[0]->src"
                                                       data-src="{{asset($collection[0]->src)}}"
                                                       data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                       class="attachment-large size-large wp-post-image lazyloaded"
                                                       src="{{asset($collection[0]->src)}}"/>
                                        </noscript>
                                        <img width="100%" height="100%"
                                             alt="{{$collection[0]->name}}"
                                             decoding="async"
                                             data-srcset="{{$collection[0]->src}}"
                                             data-src="{{asset($collection[0]->src)}}"
                                             data-sizes="(max-width: 1920px) 100vw, 1920px"
                                             class="attachment-large size-large wp-post-image lazyloaded"
                                             src="{{asset($collection[0]->src)}}"/></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title">
                                    <a title="{{$collection[0]->name}}" href="{{route('bo-suu-tap-details', $collection[0]->slug)}}">
                                        {{$collection[0]->name}}
                                    </a>
                                </h3>
                            </div>
                        </li>
                        @endif
                            @if(isset($collection[1]))
                        <li class="product type-product product-10991">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="{{route('bo-suu-tap-details', $collection[1]->slug)}}">
                                        <noscript>
                                            <img width="100%" height="100%"
                                                 alt="{{@$collection[1]->name}}"
                                                 decoding="async"
                                                 data-srcset="{{asset(@$collection[1]->src)}}"
                                                 data-src="{{asset(@$collection[1]->src)}}"
                                                 data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                 class="attachment-large size-large wp-post-image lazyloaded"
                                                 src="{{asset(@$collection[1]->src)}}"/>
                                        </noscript>
                                        <img width="100%" height="100%"
                                             alt="{{@$collection[1]->name}}"
                                             decoding="async"
                                             data-srcset="{{asset(@$collection[1]->src)}}"
                                             data-src="{{asset(@$collection[1]->src)}}"
                                             data-sizes="(max-width: 1920px) 100vw, 1920px"
                                             class="attachment-large size-large wp-post-image lazyloaded"
                                             src="{{asset(@$collection[1]->src)}}"/></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title">
                                    <a title="{{@$collection[1]->name}}" href="{{route('bo-suu-tap-details', $collection[1]->slug)}}">
                                        {{@$collection[1]->name}}
                                    </a>
                                </h3>
                            </div>
                        </li>
                                @endif
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 order-1 order-lg-2">
                <div class="sh-product-shortcode setofproduct-list slick-carousel-bo-suu-tap">
                    @foreach($collection as $index =>$collections)
                        @if($index>1 && $index<5)
                    <div class="product type-product product-10988">
                        <div class="wrap-product">
                            <div class="image-product">
                                <a class="img hover-zoom" href="{{route('bo-suu-tap-details', $collections->slug)}}">
                                    <noscript>
                                        <img width="100%" height="100%"
                                             alt="{{$collections->name}}"
                                             decoding="async"
                                             data-srcset="{{asset($collections->src)}}"
                                             data-src="{{asset($collections->src)}}"
                                             data-sizes="(max-width: 1920px) 100vw, 1920px"
                                             class="attachment-large size-large wp-post-image-large lazyloaded"
                                             src="{{asset($collections->src)}}"/>
                                    </noscript>
                                    <img width="100%" height="100%"
                                         alt="{{$collections->name}}"
                                         decoding="async"
                                         data-srcset="{{asset($collections->src)}}"
                                         data-src="{{asset($collections->src)}}"
                                         data-sizes="(max-width: 1920px) 100vw, 1920px"
                                         class="attachment-large size-large wp-post-image-large lazyloaded"
                                         src="{{asset($collections->src)}}"/></a>
                            </div>
                            <h3 class="woocommerce-loop-product__title">
                                <a title="{{$collections->name}}" href="{{route('bo-suu-tap-details', $collections->slug)}}">
                                    {{$collections->name}}
                                </a>
                            </h3>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-12 list-pro-bot order-3">
                <div class="sh-product-shortcode column-3">
                    <ul class="row list-products grid p-0">
                        @foreach($collection as $index =>$collections)
                            @if($index>5 && $index<8)
                        <li class="product type-product product-10988">
                            <div class="wrap-product">
                                <div class="image-product">
                                    <a class="img hover-zoom" href="{{route('bo-suu-tap-details', $collections->slug)}}">
                                        <noscript>
                                            <img width="100%" height="100%"
                                                 alt="{{$collections->name}}"
                                                 decoding="async"
                                                 data-srcset="{{asset($collections->src)}}"
                                                 data-src="{{asset($collections->src)}}"
                                                 data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                 class="attachment-large size-large wp-post-image lazyloaded"
                                                 src="{{asset($collections->src)}}"/>
                                        </noscript>
                                        <img width="100%" height="100%"
                                             alt="{{$collections->name}}"
                                             decoding="async"
                                             data-srcset="{{asset($collections->src)}}"
                                             data-src="{{asset($collections->src)}}"
                                             data-sizes="(max-width: 1920px) 100vw, 1920px"
                                             class="attachment-large size-large wp-post-image lazyloaded"
                                             src="{{asset($collections->src)}}"/></a>
                                </div>
                                <h3 class="woocommerce-loop-product__title">
                                    <a title="{{$collections->name}}" href="{{route('bo-suu-tap-details', $collections->slug)}}">
                                        {{$collections->name}}
                                    </a>
                                </h3>
                            </div>
                        </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <script data-two_delay_src='inline' data-two_delay_id="two_666c2e6f3e10c"></script>
    </div>
</div>
@endif
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slick-carousel-bo-suu-tap').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: 3000,
            dots: false,
            arrows: true,
            vertical: false,
        });
    });
</script>
