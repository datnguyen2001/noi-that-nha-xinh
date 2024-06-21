@extends('web.index')
@section('title','Giới thiệu công ty nội thất Hà Anh')

{{--content of page--}}
@section('content')
    @if(isset($banner_video))
    <div id="slider">
        <div class="slider-item">
            <img alt="img-slide" loading="lazy" width="100%" height="100%"
                 data-src="{{asset($banner_video->src)}}"
                 class="lazyloaded" src="{{asset($banner_video->src)}}"/>
        </div>
    </div>
    @endif
    <div id="content" class="site-content" style="padding-top: 30px">
        <div class="container">
            <div id="primary" class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    @include('web.introduction.partials.main-video')
                    @include('web.introduction.partials.sub-video')
                </main>
                <aside class="sidebar sidebar-primary">
                </aside>
            </div><!-- #primary -->
        </div>
    </div><!-- #content -->
@endsection
