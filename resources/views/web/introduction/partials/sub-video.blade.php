<div class="list-video-by-cat">
    <div class="title_related_video mt-3"><h3 class="title_vd"> Video dự án </h3></div>
    @if(isset($video_project) && count($video_project)>0)
    <div id="result_pagination" class="pagination-302">
        <div class="ajax_pagination" taxonomy="video_type" category=302 posts_per_page="8"
             post_type="video" current_video="8050">
            <div class="related-posts pt-3 row">
                @foreach($video_project as $video_projects)
                <div class="box_item_post mb-3 col-md-6">
                    <div class="box-eb-video">
                        <a href="{{ route('video-detail', $video_projects->slug) }}"
                           class="d-block open-video">
                            <div class="box-image d-block">
                                <img
                                    data-src='{{asset($video_projects->image)}}'
                                    class='lazyloaded'
                                    src='{{asset($video_projects->image)}}'
                                    style="width: 100%;">
                                <span class="ico ico2"></span>
                            </div>
                        </a>
                        <div class="title_video">
                            <h2 class="tieude">
                                <a href="{{ route('video-detail', $video_projects->slug) }}" class="d-block open-video">
                                    {{$video_projects->name}}
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
        <div class="pagination-box loadmore-302"></div>
    </div>
    @endif
</div>
<div class="list-video-by-cat">
    <div class="title_related_video mt-3">
        <h3 class="title_vd"> Video sản phẩm </h3>
    </div>
    @if(isset($video_sp) && count($video_sp)>0)
    <div id="result_pagination" class="pagination-301">
        <div class="ajax_pagination" taxonomy="video_type" category=301 posts_per_page="8"
             post_type="video" current_video="8050">
            <div class="related-posts pt-3 row">
                @foreach($video_sp as $video_sps)
                <div class="box_item_post mb-3 col-md-6">
                    <div class="box-eb-video">
                        <a href="{{ route('video-detail', $video_sps->slug) }}"
                           class="d-block open-video">
                            <div class="box-image d-block">
                                <img
                                    data-src='{{asset($video_sps->image)}}'
                                    class='lazyloaded'
                                    src='{{asset($video_sps->image)}}'
                                    style="width: 100%;">
                                <span class="ico ico2"></span>
                            </div>
                        </a>
                        <div class="title_video">
                            <h2 class="tieude">
                                <a href="{{ route('video-detail', $video_sps->slug) }}" class="d-block open-video">
                                    {{$video_sps->name}}
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
               @endforeach
            </div>
        </div>
        <div class="pagination-box loadmore-301"></div>
    </div>
    @endif
</div>
