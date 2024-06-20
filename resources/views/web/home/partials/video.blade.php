<div class="post_image item_post_1 post_image_video" style="position: relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 wow fadeInLeft" data-wow-delay="0.3s">
                <div class="box_img">
                    <div class="box_video">
                        <a href="{{route('introduction')}}" class="d-block fancyboxVideo">
                            <noscript><img decoding="async" alt="About Video" width="100%"
                                           height="100%" loading="lazy"
                                           data-src="{{asset(@$introduce->src)}}"
                                           class="lazyloaded"
                                           src="{{asset(@$introduce->src)}}">
                            </noscript>
                            <img decoding="async" alt="About Video" width="100%" height="100%"
                                 loading="lazy"
                                 data-src="{{asset(@$introduce->src)}}"
                                 class="lazyloaded"
                                 src="{{asset(@$introduce->src)}}">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 content_post_home wow fadeInRight" data-wow-delay="0.3s">
                <div class="box_content_post_home">
                    <div class="description"><h2 class="heading" style="text-align: center;">
                            {{@$introduce->name}}</h2>
                        <p style="text-align: justify;">{{@$introduce->describe}}</p>
{{--                        <p style="text-align: justify;">Có cho mình xưởng sản xuất &gt; 2.000m2--}}
{{--                            cùng Showroom gần 1.000m2 cùng đội ngũ Kiến trúc sư, nghệ nhân và--}}
{{--                            thợ lành nghề cho ra những sản phẩm tốt nhất.</p>--}}
{{--                        <p style="text-align: justify;">Nội thất Hà Anh tự hào đồng hành và cung--}}
{{--                            cấp trọn gói sản phẩm thiết kế – sản xuất – thi công các công trình--}}
{{--                            nội thất gỗ óc chó từ hiện đại cho tới tân cổ điển.</p>--}}
{{--                        <p style="text-align: justify;">Thanh lịch, sang trọng vượt thời--}}
{{--                            gian. Thiết kế tân cổ điển là sự pha trộn mảnh ghép đa sắc--}}
{{--                            màu, giữa cổ điển và hiện đại, để tạo không gian ấn tượng--}}
{{--                            ngay từ cái nhìn đầu tiên.</p>--}}
                        <p class="readmore" style="text-align: center;" align="center">
                            <a
                                title="giới thiệu nội thất hà anh"
                                href="{{route('gioi-thieu')}}"
                                rel="follow, index noopener">XEM THÊM
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
