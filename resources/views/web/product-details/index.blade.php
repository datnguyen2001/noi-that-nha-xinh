@extends('web.index')
@section('title','Chi tiết sản phẩm')

{{--content of page--}}
@section('content')

{{--    add slide banner here--}}
    <div id="content" class="site-content" style="padding-top: 30px;">
    <div class="container">
        <div class="content-sidebar-wrap">
            <main id="main" class="site-main" role="main">
                <div class="woocommerce-notices-wrapper">
                </div>
                <div id="product-2439"
                     class="product type-product post-2439 status-publish first instock product_cat-ban-tra-go-oc-cho product_cat-phong-khach-go-oc-cho product_tag-ban-tra-go-oc-cho has-post-thumbnail shipping-taxable product-type-simple">
                    <div class="top_product clearfix mb-5">
                        @include('web.contact.partials.image-slide')
                    </div>
                    <div class="content_product">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main_content__product mb-5">
                                        <div class="woocommerce-tabs wc-tabs-wrapper">
                                            @include('web.product-details.partials.content')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="block_general">
                        @include('web.contact.partials.contact-global')
                        @include('web.product-details.partials.other-choice')
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true" style="z-index: 9999">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img id="modalImage" src="{{asset('assets/images/sofa.png')}}" class="img-fluid" alt="Sofa gỗ óc chó tích hợp ngăn để đồ">
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    .modal-dialog-centered {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .modal-content {
        border: none;
        background: transparent;
    }
    .modal-body {
        padding: 0 !important;
    }
    .modal-backdrop {
        background-color: rgba(0, 0, 0, 0.8);
    }
    .greyed-out {
        opacity: 0.5 !important;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slick-carousel-product-details').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            arrows: true,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 5,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 680,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });

    $(document).ready(function() {
        $('#dev3b-gallery .gallery-image').on('click', function() {
            var src = $(this).attr('src');
            $('#mainImage').attr('src', src);
            $('#modalImage').attr('src', src);
            $('#dev3b-gallery .gallery-image').addClass('greyed-out');
            $(this).removeClass('greyed-out');
        });
    });
</script>
