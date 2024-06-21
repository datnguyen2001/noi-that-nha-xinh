@extends('web.index')
@section('title','Bộ sưu tập')
<style>
    .list-categories__item .active{
        background-color: #fe0100!important;
    }
</style>
{{--content of page--}}
@section('content')
    <div id="content" class="site-content">
        @if(isset($banner_collection))
            <div class="banner-bst">
                <img alt="Banner BST"
                     data-src="{{asset(@$banner_collection->src)}}"
                     class="lazyloaded"
                     src="{{asset(@$banner_collection->src)}}">
            </div>
        @endif
        <div class="h30" style="height: 30px"></div>
        <div class="container">
            <div id="primary" class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    <h1 class="page-title title_page_content">
                        <span>Bộ sưu tập</span>
                    </h1>
                    @if(isset($category_collection) && count($category_collection))
                        <div class="list-categories-bst">
                            <ul class="list-categories__wrap">
                                @foreach($category_collection as $category_collections)
                                    <li class="list-categories__item">
                                        <a class="d-block @if($category_collections->id == $collection->id) active @endif"
                                           href="{{route('bo-suu-tap.collection',$category_collections->slug)}}">
                                            {{$category_collections->name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(isset($post_collection) && count($post_collection)>0)
                        <div class="sh-blog-shortcode style-3">
                            <div class="row">
                                @foreach($post_collection as $post_collections)
                                    <article id="post-11118"
                                             class="element post-item item-new col-md-4 post-11118 bst type-bst status-publish has-post-thumbnail hentry bst_type-bo-suu-tap bst_type-bo-suu-tap-phong-khach">
                                        <div class="post-inner">
                                            <div class="entry-thumb">
                                                <a class="d-block"
                                                   href="https://goocchohaanh.com/bo-suu-tap/bo-suu-tap-sofa-tan-co-dien-dlouis/"
                                                   title="{{$post_collections->name}}">
                                                    <img width="100%" height="100%"
                                                         alt="{{$post_collections->name}}"
                                                         decoding="async" fetchpriority="high"
                                                         data-srcset="{{asset($post_collections->src)}}"
                                                         data-src="{{asset($post_collections->src)}}"
                                                         data-sizes="(max-width: 1920px) 100vw, 1920px"
                                                         class="attachment-large size-large wp-post-image lazyloaded"
                                                         src="{{asset($post_collections->src)}}"/>
                                                </a>
                                            </div>
                                            <div class="entry-content">
                                                <h2 class="entry-title">
                                                    <a href="https://goocchohaanh.com/bo-suu-tap/bo-suu-tap-sofa-tan-co-dien-dlouis/"
                                                       title="{{$post_collections->name}}">{{$post_collections->name}}
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </main>
            </div>
        </div>
        <div class="h30" style="height: 30px"></div>
        <div class="h90" style="height: 90px"></div>
    </div>
@endsection
