<article id="post-8050"
         class="post-8050 video type-video status-publish has-post-thumbnail hentry video_type-video-san-pham video_type-video-du-an video_type-video-noi-that">
    <div class="entry-content">
        <div id="back-video" class="main-video mb-5">
            <div class="item-video-first item-album">
                <div class="row">
                    <div class="col-lg-8 col-12 mb-lg-0 mb-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! @$introduce->link_video !!}
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="content-video-excerpt">
                            <div class="the_title_video">
                                <h2 class="title">
                                    {{@$introduce->title}} </h2>
                            </div>
                            <div class="the_excerpt">
                                <h2 style="text-align: center;"></h2>
                                <div>{!! @$introduce->describe !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
