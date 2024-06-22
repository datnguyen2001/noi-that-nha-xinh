@if(isset($project_category))
<div class="project-wrap">
    <div class="container">
        <h2 class="heading">
            <a title="Dự án thiết kế" href="{{route('du-an.details',$project_category[0]->slug)}}">{{$project_category[0]->name}}</a>
        </h2>
        <div class="project-wrap__box">
            <div class="row">
                <div class="col-lg-6">
                    <div class="block-list_cat_post_1">
                        <div class="list-list_cat_post_1 mb-md-0 mb-4">
                            <div class="slick-carousel-cate-1 project-slider" data-item="1" data-item_md="1" data-item_sm="1" data-item_mb="1" data-row="1" data-autoplay="false" data-dots="false" data-arrows="true" data-vertical="false">
                                @foreach($post_project as $index => $post_project1)
                                    @if($index <3)
                                <div class="item-post">
                                    <div class="box_post_list_cat_post_1">
                                        <a class="d-block img"
                                           href="{{route('du-an-details', $post_project1->slug)}}"
                                           title="{{$post_project1->name}}">
                                            <noscript>
                                                <img width="100%" height="100%"
                                                     alt="{{$post_project1->name}}"
                                                     decoding="async"
                                                     data-srcset="{{asset($post_project1->src)}}"
                                                     data-src="{{asset($post_project1->src)}}"
                                                     data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                     class="attachment- size- wp-post-image lazyloaded"
                                                     src="{{asset($post_project1->src)}}"/>
                                            </noscript>
                                            <img width="100%" height="100%"
                                                 alt="{{$post_project1->name}}"
                                                 decoding="async"
                                                 data-srcset="{{asset($post_project1->src)}}"
                                                 data-src="{{asset($post_project1->src)}}"
                                                 data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                 class="attachment- size- wp-post-image lazyloaded"
                                                 src="{{asset($post_project1->src)}}"/></a>
                                        <h3 class="entry-title">
                                            <a href="{{route('du-an-details', $post_project1->slug)}}" title="{{$post_project1->name}}">
                                                {{$post_project1->name}}
                                            </a>
                                       </h3>
                                    </div>
                                </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="duan_noibat">
                        <div class="row">
                            @foreach($post_project as $index => $post_project1)
                                @if($index >=3)
                            <div class="col-md-6">
                                <div class="item-product procudr-hot">
                                    <div class="image-product">
                                        <a class="img" href="{{route('du-an-details', $post_project1->slug)}}" title="{{$post_project1->name}}">
                                            <noscript>
                                                <img width="100%" height="100%" alt=""
                                                           decoding="async"
                                                           data-srcset="{{asset($post_project1->src)}}"
                                                           data-src="{{asset($post_project1->src)}}"
                                                           data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                           class="attachment-full size-full wp-post-image lazyloaded"
                                                           src="{{asset($post_project1->src)}}"/>
                                            </noscript>
                                            <img width="100%" height="100%" alt="" decoding="async"
                                                 data-srcset="{{asset($post_project1->src)}}"
                                                 data-src="{{asset($post_project1->src)}}"
                                                 data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                 class="attachment-full size-full wp-post-image lazyloaded"
                                                 src="{{asset($post_project1->src)}}"/>
                                        </a>
                                    </div>
                                    <h3 class="title_pro_slider">
                                        <a href="{{route('du-an-details', $post_project1->slug)}}" title="{{$post_project1->name}}">
                                            {{$post_project1->name}}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                           @endif
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slick-carousel-cate-1').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            dots: false,
            arrows: true,
            vertical: false,
        });
    });
</script>
