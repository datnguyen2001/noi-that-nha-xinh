<!doctype html>
<html lang="vi">

<head>
    <meta name="google-site-verification" content="googleeacc2166ce777ac3.html"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/images/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/images/logo.png') }}" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
          integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/web/css/site.css') }}">
    <script src="{{asset('assets/web/js/header.js')}}"></script>
    <script src="{{asset('assets/web/js/all.js')}}"></script>
    @yield('style_page')
    <style>
        .cart{
            cursor: pointer;
        }
        .cart:hover{
            color: white;
        }
    </style>
</head>

<body>

@include('web.partials.header')

@yield('content')

@include('web.partials.footer')

<div class="social-right-fixed"><a href="{{route('hot-sale')}}" class="btn_sale">Sale</a><a
        href="https://zalo.me/{{@$setting->zalo}}" target="_blank" class="zalo_chat" rel="nofollow">
        <noscript><img data-src='{{asset('assets/images/iconzalo.png')}}'
                       class='lazyload'
                       src='{{asset('assets/images/iconzalo.png')}}'></noscript>
        <img data-src="{{asset('assets/images/iconzalo.png')}}"
             class="lazy entered loaded ls-is-cached lazyloaded"
             src="{{asset('assets/images/iconzalo.png')}}"
             data-ll-status="loaded" loading="lazy"><span id="mxh_zalo">Chat Zalo</span></a><a
        href="mailto:{{@$setting->email}}" target="_blank">
        <noscript><img data-src='{{asset('assets/images/iconmail.png')}}'
                       class='lazyload'
                       src='{{asset('assets/images/iconmail.png')}}'></noscript>
        <img data-src="{{asset('assets/images/iconmail.png')}}"
             class="lazy entered loaded ls-is-cached lazyloaded"
             src="{{asset('assets/images/iconmail.png')}}"
             data-ll-status="loaded" loading="lazy"><span id="mxh_ytb">Gửi thư liên hệ</span></a><a
        href="tel:{{@$setting->phone}}" target="_blank">
        <noscript><img data-src='{{asset('assets/images/iconphone.png')}}'
                       class='lazyload'
                       src='{{asset('assets/images/iconphone.png')}}'></noscript>
        <img data-src="{{asset('assets/images/iconphone.png')}}"
             class="lazy entered loaded ls-is-cached lazyloaded"
             src="{{asset('assets/images/iconphone.png')}}"
             data-ll-status="loaded" loading="lazy"><span id="mxh_ytb">Gọi điện liên hệ</span></a></div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
@yield('script_page')
<script src="{{ asset('assets/js/main.js') }}"></script>

{{-- CART --}}
<script>
    //Add specific product to cart
    function addToCart(id) {
        var formData = new FormData();
        formData.append('product_id', id);
        $.ajax({
            url: '{{ route('cart.store') }}',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.error == 0) {
                    toastr.success(response.message);
                }
            },
            error: function (xhr, status, error) {
                toastr.error(xhr.responseJSON.message);
            }
        });
    }

    //Get cart details
    function getCart(callback) {
        $.ajax({
            url: '{{ route('cart.index') }}',
            type: 'GET',
            headers: {
                'X-CSRF-TOKEN': `{{ csrf_token() }}`
            },
            success: function (response) {
                if (response.error == 0) {
                    callback(response.data);
                }
            },
            error: function (xhr, status, error) {
                toastr.error(xhr.responseJSON.message);
            }
        });
    }

    //Reload sidebar cart data
    function reloadSideBarCart() {
        $('.list_carts').html('');
        getCart(function (cartItems) {
            $('#cartUl').empty();
            var html = '';
            var total_money = 0;
            var count_cart = cartItems.length;

            if (count_cart > 0) {
                console.log(156,cartItems)
                $.each(cartItems, function (index, cartItem) {
                    total_money += cartItem.total_money;
                    var formattedTotal = cartItem.price.toLocaleString('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    });

                    var formattedCost = cartItem.cost.toLocaleString('vi-VN', {
                        style: 'currency',
                        currency: 'VND'
                    });

                    html += `
                    <div class="d-flex line_cart_small">
                        <div class="d-flex flex-column align-items-center">
                            <img src="${window.location.origin}${cartItem.thumbnail}" alt="${cartItem.name}" class="img-cart-small">
                            <div style="cursor: pointer" class="removeCartBtn" data-value-id="${cartItem.id}">
                                <i class="fa-solid fa-circle-xmark mt-2" style="color: red; font-size: 15px;"></i>
                                <span style="color: red">Xóa</span>
                            </div>
                        </div>
                        <div>
                            <p class="title_sp_cart_small">${cartItem.name}</p>
                            <p class="price_sp_cart_small price_sp_${index}">${formattedTotal}</p>
                            <p class="old-price old_price_${index}" style="text-decoration: line-through">${formattedCost}</p>
                            <span class="number-input">
                                <button type="button" data-value-id="${cartItem.id}" class="down down_quantity decreaseBtn">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                                <input type="number" name="quantity_${cartItem.id}" id="quantity_${cartItem.id}" class="numbersOnly" maxlength="5" disabled value="${cartItem.quantity}"/>
                                <button type="button" data-value-id="${cartItem.id}" class="plus increaseBtn">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                `;
                });

                $('.list_carts').append(html);
                var formattedTotalMoney = total_money.toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });
                let htmlMoney = `
                <div class="d-flex justify-content-between align-items-center">
                    <span class="title_end_small">Tổng tiền</span>
                    <span class="total_end_small">${formattedTotalMoney}</span>
                </div>
                <a href="${window.location.origin + '/thanh-toan'}">
                    <button type="submit" class="payment-btn-small">Thanh toán</button>
                </a>
            `;
                $('.list_carts').append(htmlMoney);
            } else {
                html = `<p class="text_empty"><i class="fa-solid fa-face-frown face_frown"></i></br>Không có sản phẩm nào trong giỏ hàng</br>Vui lòng thêm sản phẩm.</p>`;
                $('.list_carts').html(html);
                $('.cart-number-sp').css('display', 'none');
                $('.cart-not-number-sp').css('display', 'block');
            }
        });
    }

    $(document).on("click", ".btn-add-cart", function () {
        var productId = $(this).data("product-id");
        var formData = new FormData();
        formData.append("product_id", productId);
        $.ajax({
            url: window.location.origin + "/addToCart",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            data: formData,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.error == 0) {
                    toastr.success(response.message);
                }
            },
            error: function (xhr, status, error) {
                toastr.error(xhr.responseJSON.message);
            },
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#offcanvasRight').on('shown.bs.offcanvas', function () {
            reloadSideBarCart();
        });
    });
    $(document).ready(function(){
        $('#back-top a').click(function(event) {
            event.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });
    });
</script>

<script>
    $(document).ready(function () {
        $(document).on("click", ".removeCartBtn", function () {
            var productId = $(this).attr('data-value-id');

            $.ajax({
                url: '{{ route('cart.remove') }}',
                type: 'POST',
                data: {
                    product_id: productId
                },
                headers: {
                    'X-CSRF-TOKEN': `{{ csrf_token() }}`
                },
                success: function (response) {
                    if (response.error == 0) {
                        toastr.success(response.message);
                        reloadSideBarCart();
                        reloadSideBarPay()
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error(xhr.responseJSON.message);
                }
            });

        });

        //Handle cart quantity update
        $(document).on('click', '.increaseBtn', increaseQuantity);
        $(document).on('click', '.decreaseBtn', decreaseQuantity);

        function increaseQuantity() {
            var cartItemId = $(this).attr('data-value-id');
            var quantity = parseInt($('#quantity_'+cartItemId).val());
            quantity++;
            updateCartQuantity(cartItemId, quantity);
        }

        function decreaseQuantity() {
            var cartItemId =$(this).attr('data-value-id');
            var quantity = parseInt($('#quantity_'+cartItemId).val());
            if (quantity > 1) {
                quantity--;
                updateCartQuantity(cartItemId, quantity);
            }
        }

        //Update cart quantity
        function updateCartQuantity(itemId, quantity) {
            $.ajax({
                url: '{{ route('cart.update') }}',
                type: 'PUT',
                headers: {
                    'X-CSRF-TOKEN': `{{ csrf_token() }}`
                },
                data: {
                    product_id: itemId,
                    quantity: quantity
                },
                success: function (response) {
                    if (response.error == 0) {
                        reloadSideBarCart();
                        reloadSideBarPay()
                    }
                },
                error: function (xhr, status, error) {
                    toastr.error(xhr.responseJSON.message);
                }
            });
        }
    });
</script>
</body>

</html>
