<div class="devvn-popup-quickbuy" data-popup="popup-quickbuy" id="popup_content_order" style="display: none; z-index: 9999">
    <div class="devvn-popup-inner">
        <div class="devvn-popup-title">
            <span>Liên hệ đặt hàng</span>
            <button type="button" class="devvn-popup-close">
                <i class="fas fa-window-close" style="color: white;"></i>
            </button>
        </div>
        <div class="devvn-popup-content devvn-popup-content_7896 ">
            <div class="devvn-popup-content-left ">
                <div class="devvn-popup-prod">
                    <div class="devvn-popup-img">
                        <img id="pop-up-image" alt="" data-src="{{ $productDetails->src }}"
                             class=" ls-is-cached lazyloaded"
                             src="{{ $productDetails->src }}"
                             loading="lazy" style="width: 130px;">
                    </div>
                    <div class="devvn-popup-info">
                        <span class="devvn_title">{{ $productDetails->name }}</span>
                        <span class="devvn_price"></span>
                    </div>
                </div>
                <div class="devvn_prod_variable" data-simpleprice="">
                </div>
                Bạn vui lòng nhập đúng số điện thoại để chúng tôi sẽ gọi xác nhận đơn hàng trước khi giao hàng. Xin cảm ơn!
            </div>
            <div class="devvn-popup-content-right">
                <form class="devvn_cusstom_info" id="devvn_cusstom_info" method="post" novalidate="novalidate" action="{{ route('order') }}">
                    @csrf
                    <div class="popup-customer-info">
                        <div class="popup-customer-info-title">Thông tin người mua</div>
                        <div class="popup-customer-info-group popup-customer-info-radio">
                            <label>
                                <input type="radio" name="customer-gender" value="1" checked="" autocomplete="off">
                                <span>Anh</span>
                            </label>
                            <label>
                                <input type="radio" name="customer-gender" value="2" autocomplete="off">
                                <span>Chị</span>
                            </label>
                        </div>
                        <div class="popup-customer-info-group">
                            <div class="popup-customer-info-item-2 mb-2">
                                <input type="text" class="customer-name form-control" name="customer-name" placeholder="Họ và tên" autocomplete="off" required>
                            </div>
                            <div class="popup-customer-info-item-2">
                                <input type="text" class="customer-phone form-control" name="customer-phone" placeholder="Số điện thoại" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="popup-customer-info-group">
                            <div class="popup-customer-info-item-1">
                                <input type="text" class="customer-email form-control" name="customer-email" data-required="false" placeholder="Địa chỉ email (Không bắt buộc)" autocomplete="off">
                            </div>
                        </div>
                        <div class="popup-customer-info-group">
                            <div class="popup-customer-info-item-1">
                                <textarea class="customer-address form-control" name="customer-address" placeholder="Địa chỉ nhận hàng (Không bắt buộc)"></textarea>
                            </div>
                        </div>
                        <div class="popup-customer-info-group">
                            <div class="popup-customer-info-item-1">
                                <textarea class="order-note form-control" name="order-note" placeholder="Ghi chú đơn hàng (Không bắt buộc)"></textarea>
                            </div>
                        </div>
{{--                        <div class="popup-customer-info-group">--}}
{{--                            <div class="popup-customer-info-item-1 popup_quickbuy_shipping">--}}
{{--                                <div class="popup_quickbuy_shipping_title">Tổng:</div>--}}
{{--                                <div class="popup_quickbuy_total_calc">{{$productDetails->price}} ₫</div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="popup-customer-info-group">
                            <div class="popup-customer-info-item-1">
                                <input type="hidden" name="product_id" value="{{ $productDetails->id }}">
                                <button type="submit" class="devvn-order-btn">Đặt hàng ngay</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
