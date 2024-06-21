@extends('web.index')
@section('title','Lưu trữ Tin tức - Khuyến mại')

{{--content of page--}}
@section('content')
    <div id="content" class="site-content" style="padding-top: 30px">
        <div class="container">
            <div id="primary" class="content-sidebar-wrap">
                <div class="row">
                    <div class="col-lg-8">
                        <main id="main" class="site-main" role="main">
                            <h1 class="page-title">
                                <span>KHUYẾN MÃI MUA SOFA CHẤT LƯỢNG</span>
                            </h1>
                            <div class="content_post_news">
                                <div class="box_content_post_news">
                                    <div class="chitietbaiviet">
                                        <div class="content_post_view">
                                            <div class="entry-meta">
                                                <span class="entry-time"><i class="flat flat-calendar"></i> 10:52 sáng 20/08/2023</span>
                                                <span class="entry-view"><i class="flat flat-clock"></i> 185 lượt xem</span>
                                            </div>
                                            <div class="entry-content">
                                                @include('web.khuyen-mai-details.partials.chi-tiet-bai-viet')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                    <div class="col-lg-4">
                        @include('web.partials.extra-information')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
