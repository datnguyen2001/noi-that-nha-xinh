@extends('web.index')
@section('title','Tin Tuc')

{{--content of page--}}
@section('content')
    <div id="content" class="site-content tax-tu_van" style="padding-top: 30px">
        <div class="container">
            <div id="primary" class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    <h1 class="page-title">
                        <span>Tin tức - Khuyến mại</span>
                    </h1>
                    @include('web.tin-tuc.partials.khuyen-mai')
                    @include('web.tin-tuc.partials.tin-tuc')
                </main>
            </div>
        </div>
    </div>
@endsection
