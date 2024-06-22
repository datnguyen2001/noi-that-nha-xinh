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
                                <span>{{$news->name}}</span>
                            </h1>
                            <div class="content_post_news">
                                <div class="box_content_post_news">
                                    <div class="chitietbaiviet">
                                        <div class="content_post_view">
                                            <div class="entry-meta">
                                                @php
                                                    $formattedDate = \Carbon\Carbon::parse($news->created_at)->format('h:i A d/m/Y');
                                                    $formattedDate = str_replace(['AM', 'PM'], ['sáng', 'chiều'], $formattedDate);
                                                @endphp
                                                <span class="entry-time"><i class="flat flat-calendar"></i> {{ $formattedDate }}</span>
{{--                                                <span class="entry-view"><i class="flat flat-clock"></i> 185 lượt xem</span>--}}
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
