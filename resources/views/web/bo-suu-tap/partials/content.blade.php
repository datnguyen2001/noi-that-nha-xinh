<article id="post-8883" class="post-8883 post type-post status-publish format-standard has-post-thumbnail hentry category-du-an category-du-an-thiet-ke-go-oc-cho">
    <div class="content_post_news">
        <div class="box_content_post_news">
            <div class="chitietbaiviet">
                <div class="content_post_view">
                    <div class="entry-meta">
                        <span class="entry-time"><i class="flat flat-calendar"></i> 5:27 chiều 20/09/2023</span>
                        <span class="entry-view"><i class="flat flat-clock"></i> 582 lượt xem</span>
                    </div>
                    <div class="entry-content">
                        <p>&nbsp;</p>
                        {!! $detailCollection -> content?? '' !!}
                        <p>&nbsp;</p>
                    </div><!-- .entry-content -->
                    <div id="register-form">
                        <p class="register-form-title">Đăng ký tư vấn</p>
                        <div class="wpcf7 js" id="wpcf7-f1510-p8883-o1" lang="vi" dir="ltr">
                            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                            <form method="POST" action="{{ route('dang-ky.submit') }}">
                                @csrf
                                <div class="box_dangkytuvan">
                                    <div class="form-group">
                                        <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                    <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                           aria-required="true" aria-invalid="false"
                                                           placeholder="Họ và tên" value="" type="text" name="your-name" required/>
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-address">
                                                        <input size="40" class="wpcf7-form-control wpcf7-text form-control"
                                                               aria-invalid="false" placeholder="Địa chỉ"
                                                               value="" type="text" name="your-address" required/>
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-phone">
                                                        <input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel form-control"
                                                               aria-required="true" aria-invalid="false"
                                                               placeholder="Điện thoại" value="" type="tel" name="your-phone" required/>
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                        <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email form-control"
                                                               aria-invalid="false" placeholder="Email"
                                                               value="" type="email" name="your-email" required/>
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                        <textarea rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Nội dung" name="your-message" required></textarea>
                                                    </span>
                                        </p>
                                    </div>
                                    <div class="form-submit">
                                        <p>
                                            <button class="du-an-detail-submit wpcf7-form-control wpcf7-submit has-spinner custom-submit">Gửi đi</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</article>
