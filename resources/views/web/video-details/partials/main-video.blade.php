<article id="post-8050"
         class="post-8050 video type-video status-publish has-post-thumbnail hentry video_type-video-san-pham video_type-video-du-an video_type-video-noi-that">
    <div class="entry-content">
        <div id="back-video" class="main-video mb-5">
            <div class="item-video-first item-album">
                <div class="row">
                    <div class="col-lg-8 col-12 mb-lg-0 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! @$videoDetails->src !!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="content-video-excerpt">
                            <div class="the_title_video">
                                <h2 class="title">
                                    {{@$videoDetails->investor . ' - ' . @$videoDetails->construction_address}} </h2>
                            </div>
                            <div class="the_excerpt_details">
                                <p>
                                    <span style="font-size: 20px;">
                                        <strong>THÔNG TIN DỰ ÁN&nbsp;</strong>
                                    </span>
                                </p>
                                <table class="shop_attributes">
                                    <tbody>
                                    <tr>
                                        <th>Chủ đầu tư:</th>
                                        <td>{{$videoDetails->investor ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Địa Chỉ thi công:</th>
                                        <td>{{$videoDetails->construction_address ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Loại hình:</th>
                                        <td>{{$videoDetails->type ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phong cách thiết kế:</th>
                                        <td>{{$videoDetails->design_style ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Vật liệu chính:</th>
                                        <td>{{$videoDetails->main_material ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Đơn vị thiết kế:</th>
                                        <td>{{$videoDetails->design_unit ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tổng diện tích XD:</th>
                                        <td>{{$videoDetails->total_construction_area ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Năm thực hiện:</th>
                                        <td>{{$videoDetails->year_implementation ?? ''}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p><a class="popup_form_dat-hang"><strong>ĐĂNG KÝ TƯ VẤN</strong></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
