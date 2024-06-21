<div class="list-categories">
    <a class="item-category" href="https://goocchohaanh.com/tin-tuc-khuyen-mai/khuyen-mai/">Tin Tức</a>
    <div id="result_pagination" class="pagination-271">
        <div class="ajax_pagination" taxonomy="tu_van" category=271 posts_per_page="9" post_type="tuvan">
            <div class="sh-blog-shortcode style-2">
                <div class="row">
                    @foreach($new as $news)
                    <article id="post-6946" class="element hentry post-item item-new col-md-4 post-6946 tuvan type-tuvan status-publish has-post-thumbnail tu_van-khuyen-mai tu_van-tin-tuc-khuyen-mai">
                        <div class="post-inner">
                            <div class="entry-thumb">
                                <a class="d-block" href="https://goocchohaanh.com/c-trinh-khuyen-mai-giam-20-cho-sofa-tan-co-dien/" title="{{$news->name}}">
                                    <img width="100%" height="100%"
                                         alt="{{$news->name}}" decoding="async" fetchpriority="high"
                                         data-srcset="{{asset($news->src)}}"
                                         data-src="{{asset($news->src)}}"
                                         data-sizes="(max-width: 1000px) 100vw, 1000px" class="attachment-large size-large wp-post-image lazyloaded"
                                         src="{{asset($news->src)}}" />
                                </a>
                            </div>
                            <div class="entry-content">
                                <h2 class="entry-title">
                                    <a href="https://goocchohaanh.com/c-trinh-khuyen-mai-giam-20-cho-sofa-tan-co-dien/" title="{{$news->name}}">
                                       {{$news->name}}
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
