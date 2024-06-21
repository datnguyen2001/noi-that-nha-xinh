@extends('web.index')
@section('title','Dự án')

{{--content of page--}}
@section('content')
<div id="content" class="site-content" style="padding-top: 30px">
    <div class="container">
        <div id="primary" class="content-sidebar-wrap">
            <main id="main" class="site-main" role="main">
                <h1 class="page-title title_page_content">
                    <span>{{$cate->name}}</span>
                </h1>
                <div class="sh-blog-shortcode style-2">
                    <div class="row">
                        @foreach($dataProject as $dataProjects)
                        <article id="post-8883" class="element post-item item-new col-md-6 post-8883 post type-post status-publish format-standard has-post-thumbnail hentry category-du-an category-du-an-thiet-ke-go-oc-cho">
                            <div class="post-inner">
                                <div class="entry-thumb">
                                    <a class="d-block" href="https://goocchohaanh.com/anh-huan-biet-thu-thanh-pho-lao-cai/"
                                       title="{{$dataProjects->name}}">
                                        <img width="100%" height="100%"
                                             alt="{{$dataProjects->name}}"
                                             decoding="async" fetchpriority="high"
                                             data-srcset="{{asset($dataProjects->src)}}"
                                             data-sizes="(max-width: 1920px) 100vw, 1920px"
                                             class="attachment-sh_thumb300x200 size-sh_thumb300x200 wp-post-image lazyloaded"
                                             src="{{asset($dataProjects->src)}}" />
                                    </a>
                                </div>
                                <div class="entry-content">
                                    <h2 class="entry-title">
                                        <a href="https://goocchohaanh.com/anh-huan-biet-thu-thanh-pho-lao-cai/"
                                           title="{{$dataProjects->name}}">
                                            {{$dataProjects->name}}
                                        </a>
                                    </h2>
                                </div>
                            </div>
                        </article>
                      @endforeach
                       </div>
                </div>
                <div class="block_general">
                    <div class="page_contact mt-5">
                        @include('web.contact.partials.contact-global')
                    </div>
                    <section>
                        @include('web.home.partials.collection')
                    </section>
                </div>
            </main>
        </div>
    </div>

</div>
@endsection
