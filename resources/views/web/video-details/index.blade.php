@extends('web.index')
@section('title', $videoDetails->investor . ' - ' . $videoDetails->construction_address)

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
        <div class="container">
            <div id="primary" class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    @include('web.video-details.partials.main-video')
                    @include('web.video-details.partials.sub-video')
                </main>
                <aside class="sidebar sidebar-primary">
                </aside>
            </div><!-- #primary -->
        </div>
@endsection
