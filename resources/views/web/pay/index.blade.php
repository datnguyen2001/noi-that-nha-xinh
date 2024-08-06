@extends('web.index')
@section('title','Giỏ hàng')
<link rel="stylesheet" href="{{ asset('assets/web/css/pay.css') }}">
{{--content of page--}}
@section('content')
    <div class="container">
        <div class="container-cart">
            <div class="nav-cart">
                <a href="{{url('/')}}" class="buy-more">
                    <i class="fa fa-angle-left"></i>
                    Mua thêm sản phẩm khác </a>
            </div>
            <div class="content-cart">
                <div class="list-products">
                </div>
                <div class="payment">
                    <form action="{{ route('order-product') }}" method="post" class="formPayment" id="formPayment">
                        @csrf
                        <h3 class="h3_title mt-0">Thông tin mua hàng</h3>
                        <input type="text" name="dataProduct" hidden>
                        <div class="mb-2">
                            <label for="gender1">
                                <input type="radio" name="customer-gender" id="gender1" value="1" checked >
                                <span>Anh</span>
                            </label>
                            <label for="gender0">
                                <input type="radio" name="customer-gender" id="gender0" value="2" >
                                <span>Chị</span>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <input class="form-control" type="text" name="customer-name" id="customer-name" value="{{ old('customer-name', request()->get('customer-name')) }}" placeholder="Họ tên" autocomplete="off" required>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <input class="form-control" type="text" name="customer-phone" id="customer-phone" autocomplete="off" value="{{ old('customer-phone', request()->get('customer-phone')) }}"
                                       placeholder="Số điện thoại" required>
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input class="form-control" type="text" name="customer-email" autocomplete="off" id="customer-email" value="{{ old('customer-email', request()->get('customer-email')) }}"
                                       placeholder="Địa chỉ email (Không bắt buộc)">
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input class="form-control" type="text" name="customer-address" autocomplete="off" id="customer-address" value="{{ old('customer-address', request()->get('customer-address')) }}"
                                       placeholder="Địa chỉ nhận hàng (Không bắt buộc)">
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input class="form-control" type="text" name="order-note" autocomplete="off" id="order-note" value="{{ old('order-note', request()->get('order-note')) }}"
                                       placeholder="Ghi chú đơn hàng (Không bắt buộc)">
                            </div>
                        </div>
                        <p class="total_end pt-2 mt-5">Tổng thanh toán:
                            <span id="total_money" class="total_money_all">0đ</span>
                        </p>
                        <div class="btn-area">
                            <button type="submit" id="cod-btn" class="payment-btn">Đặt hàng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_page')
<script>
    $(document).on("click", ".removeCartBtnPay", function () {
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
                    if (response.count_data>0){
                        reloadSideBarCart();
                    }else{
                        window.location.href = window.location.origin
                    }
                }
            },
            error: function (xhr, status, error) {
                toastr.error(xhr.responseJSON.message);
            }
        });

    });

    reloadSideBarPay();
    //Get cart details
    function getPay(callback) {
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
    function reloadSideBarPay() {
        $('.list-products').html('');
        getPay(function (cartItems) {
            $('#cartUl').empty();
            var html = '';
            var total_money = 0;
            var count_cart = cartItems.length;
            $('input[name="dataProduct"]').val(JSON.stringify(cartItems));

            if (count_cart > 0) {
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
            <div class="product-cart1">
                <div class="product-cart">
                    <input type="hidden" class="cart_id_${index}" value="${cartItem.id}">
                    <div class="product-image text-center p-0">
                        <a href="${window.location.origin + '/san-pham/' + cartItem.slug}">
                            <img src="${cartItem.thumbnail}" class="img-responsive"/>
                        </a>
                        <a class="del-pro-link removeCartBtnPay" data-value-id="${cartItem.id}" style="color: red">
                            <i class="fa-solid fa-circle-xmark" style="font-size: 16px; margin-right: 3px"></i>Xóa</a>
                    </div>
                    <div class="product-detail">
                        <div class="top_detail">
                            <a class="product-name-cart" href="${window.location.origin + '/san-pham/' + cartItem.slug}">${cartItem.name}</a>
                            <p style="font-size: 15px;margin-bottom: 10px">Số lượng: ${cartItem.quantity}</p>
                            <div class="fee visibleCart-xs">
                                <p class="price-item price_item_${index}">${formattedTotal}</p>
                                <del class="old-price old_price_${index}">${formattedCost}</del>
                            </div>
                        </div>
                        <div class="price_detail">
                            <div class="quan visibleCart-xs">
                                <span class="number-input">
                                    <button type="button" data-value-id="${cartItem.id}" class="down decreaseBtn"></button>
                                    <input type="number" name="quantity_${cartItem.id}" class="numbersOnly1" id="quantity_${cartItem.id}" maxlength="5" value="${cartItem.quantity}" disabled/>
                                    <button type="button" data-value-id="${cartItem.id}" class="plus increaseBtn"></button>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="product-price-cart hiddenCart-xs">
                        <div class="fee">
                            <p class="price-item price_item_${index}">${formattedTotal}</p>
                            <del class="old-price old_price_${index}">${formattedTotal}</del>
                        </div>
                        <div class="quan">
                            <span class="number-input">
                                <button type="button" data-value-id="${cartItem.id}" class="down decreaseBtn"></button>
                                    <input type="number" name="quantity_${cartItem.id}" class="numbersOnly1" id="quantity_${cartItem.id}" maxlength="5" value="${cartItem.quantity}" disabled/>
                                    <button type="button" data-value-id="${cartItem.id}" class="plus increaseBtn"></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            `;
                });
                $('.list-products').append(html);
                var formattedTotalMoney = total_money.toLocaleString('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                });
                $('.total_money_all').html(formattedTotalMoney);
            }
        });
    }
</script>
@stop
