@extends('web.index')
@section('title','Giới thiệu công ty nội thất Hà Anh')

{{--content of page--}}
@section('content')
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
