<section class="related">
    <div class="container">
        <h2 class="heading">
            <span>LỰA CHỌN HOÀN HẢO KHÁC</span>
        </h2>
        <div class="sh-product-shortcode column-3 mb-5">
            <ul class="row list-products">
                @foreach($relatedProducts as $relatedProduct)
                    <li class="product type-product post-7896 status-publish first instock product_cat-phong-khach-go-oc-cho product_cat-sofa-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">
                        <div class="wrap-product">
                            <div class="image-product">
                                <a class="img hover-zoom" href="{{ route('product-detail', $relatedProduct->slug) }}" title="{{ $relatedProduct->name ?? '' }}">
                                    <img width="100%" height="100%"
                                         alt="" decoding="async" fetchpriority="high"
                                         data-srcset="{{ $relatedProduct->src ?? '' }} 1920w, {{ $relatedProduct->src ?? '' }} 768w, {{ $relatedProduct->src ?? '' }} 1536w"
                                         data-src="{{$relatedProduct->src ?? ''}}"
                                         data-sizes="(max-width: 1920px) 100vw, 1920px"
                                         class="attachment-full size-full lazyloaded"
                                         src="{{$relatedProduct->src ?? ''}}" />
                                </a>
                            </div>
                            <h3 class="woocommerce-loop-product__title">
                                <a title="{{$relatedProduct->name ?? ''}}"
                                   href="{{route('product-detail', [$relatedProduct->slug])}}">
                                    {{$relatedProduct->name ?? ''}}
                                </a>
                            </h3>
                            <div class="price_pro">
                                <p class="price_regular i3">Giá:
                                    <ins>{{ isset($relatedProduct->price) ? number_format($relatedProduct->price, 0, ',', '.') . ' VNĐ' : 'Liên hệ' }}</ins>
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
                </ul>
        </div>
    </div>
</section>
