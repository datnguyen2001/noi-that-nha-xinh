<footer id="footer" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
    <div class="footer-widgets">
        <div class="container">
            <div class="wrap">
                <div class="row">
                    <div class="footer-widgets-area col-md-3">
                        <section id="text-5" class="widget widget_text">
                            <h3 class="widget-title">{{@$setting->name_footer}}</h3>
                            <div class="textwidget">
                                <p>
                                    <u>OFFICE &amp; SHOWROOM:<br/></u>
                                    <a rel="nofollow noopener">
                                        {{@$contact_us->address_office}}
                                    </a>
                                </p>
                                <p>
                                    <u>NHÀ MÁY SẢN XUẤT:<br/></u>
                                    {{@$contact_us->address_factory}}
                                </p>
                            </div>
                        </section>
                    </div>
                    <div class="footer-widgets-area col-md-3">
                        <section id="information-8" class="widget widget_information">
                            <h3 class="widget-title">THÔNG TIN LIÊN HỆ</h3>
                            <ul>
                                <li>
                                    <i class="d-none flat flat-phone"></i>
                                    <span class="">Hotline:</span>
                                    {{@$setting->hotline}}
                                </li>
                                <li>
                                    <i class="d-none flat flat-phone"></i>
                                    <span class="">Số điện thoại:</span>
                                    {{@$setting->phone}}
                                </li>
                                <li>
                                    <i class="d-none flat flat-mail"></i>
                                    <span class="">Email:</span>
                                     {{@$setting->email}}
                                </li>
                                <li>
                                    <i class="d-none flat flat-global"></i>
                                    <span class="">Website:</span>
                                    {{@$setting->website}}
                                </li>
                            </ul>
                        </section>
                        <section id="media_image-9" class="widget widget_media_image">
                            <a href="http://online.gov.vn/Home/WebDetails/52343">
                                <noscript><img width="218" height="83" alt="logoSaleNoti"
                                               style="max-width: 100%; height: auto;" decoding="async"
                                               data-srcset="https://goocchohaanh.com/wp-content/uploads/2022/03/logoSaleNoti-300x114.png 300w, https://goocchohaanh.com/wp-content/uploads/2022/03/logoSaleNoti.png 600w"
                                               data-src="{{asset('assets/images/bocongthuong.png')}}"
                                               data-sizes="(max-width: 218px) 100vw, 218px"
                                               class="image wp-image-5840  attachment-220x83 size-220x83 lazyloaded"
                                               src="{{asset('assets/images/bocongthuong.png')}}"
                                               srcset="https://goocchohaanh.com/wp-content/uploads/2022/03/logoSaleNoti-300x114.png 300w, https://goocchohaanh.com/wp-content/uploads/2022/03/logoSaleNoti.png 600w"
                                               sizes="(max-width: 218px) 100vw, 218px"/></noscript>
                                <img width="218" height="83" alt="logoSaleNoti" style="max-width: 100%; height: auto;"
                                     decoding="async"
                                     data-srcset="https://goocchohaanh.com/wp-content/uploads/2022/03/logoSaleNoti-300x114.png 300w, https://goocchohaanh.com/wp-content/uploads/2022/03/logoSaleNoti.png 600w"
                                     data-src="{{asset('assets/images/bocongthuong.png')}}"
                                     data-sizes="(max-width: 218px) 100vw, 218px"
                                     class="image wp-image-5840  attachment-220x83 size-220x83 lazyloaded"
                                     src="{{asset('assets/images/bocongthuong.png')}}"
                                     srcset="https://goocchohaanh.com/wp-content/uploads/2022/03/logoSaleNoti-300x114.png 300w, https://goocchohaanh.com/wp-content/uploads/2022/03/logoSaleNoti.png 600w"
                                     sizes="(max-width: 218px) 100vw, 218px"/></a></section>
                    </div>
                    <div class="footer-widgets-area col-md-3">
                        <section id="nav_menu-2" class="widget widget_nav_menu">
                            <h3 class="widget-title">Hỗ trợ khách hàng</h3>
                            <div class="menu-ho-tro-khach-hang-container">
                                <ul id="menu-ho-tro-khach-hang" class="menu">
                                    @if(isset($support) && count($support)>0)
                                        @foreach($support as $support_item)
                                    <li id="menu-item-426"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-426">
                                        <a href="https://goocchohaanh.com/huong-dan-mua-hang/">{{$support_item->name}}</a>
                                    </li>
                                        @endforeach
                                    @endif
                                    <li id="menu-item-5560"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5560">
                                        <a href="{{route('lien-he')}}">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="footer-widgets-area col-md-3">
                        <section id="media_image-10" class="widget widget_media_image">
                            <a href="{{@$setting->link_address}}">
                                <noscript>
                                    <img width="833" height="616" alt="" style="max-width: 100%; height: auto;"
                                               decoding="async"
                                               data-srcset="{{@$setting->image_address}}"
                                               data-src="{{@$setting->image_address}}"
                                               data-sizes="(max-width: 833px) 100vw, 833px"
                                               class="image wp-image-11265  attachment-full size-full lazyload"
                                               src="{{@$setting->image_address}}"
                                               srcset="{{@$setting->image_address}}"
                                               sizes="(max-width: 833px) 100vw, 833px"/></noscript>
                                <img width="833" height="616" alt="" style="max-width: 100%; height: auto;"
                                     decoding="async"
                                     data-srcset="{{@$setting->image_address}}"
                                     data-src="{{@$setting->image_address}}"
                                     data-sizes="(max-width: 833px) 100vw, 833px"
                                     class="image wp-image-11265  attachment-full size-full lazyloaded"
                                     src="{{@$setting->image_address}}"
                                     srcset="{{@$setting->image_address}}"
                                     sizes="(max-width: 833px) 100vw, 833px"/>
                            </a>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .footer-widgets -->
    <div class="site-info">
        <div class="container">
            <div class="wrap">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        Copyright © 2024 {{@$setting->name_footer}}. <span id="buff"></span> All rights reserved <span
                            id="buff1"></span></div>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->
    <p id="back-top"><a href="#top" target="_blank"><span></span></a></p>
</footer>
<script>
    $(document).ready(function(){
        $('#back-top a').click(function(event) {
            event.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });
    });
</script>
