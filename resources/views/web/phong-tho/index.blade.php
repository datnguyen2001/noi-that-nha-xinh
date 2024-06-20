@extends('web.index')
@section('title','Phòng Thờ')

{{--content of page--}}
@section('content')
    <div id="content" class="site-content" style="padding-top: 30px">
        <div class="container">
            <div class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    <header class="woocommerce-products-header">
                        <h1 class="woocommerce-products-header__title page-title">
                            <span>Bàn Thờ</span>
                        </h1>
                    </header>
                    <div class="list-categories tan_co 123">
                        <div class="container">
                            <div class="list-categories__wrap">
                                <div class="list-categories__item">
                                    <a class="d-block" href="https://goocchohaanh.com/phong-khach-go-oc-cho-dep/">Bàn Thờ</a>
                                </div>
                                <div class="list-categories__item">
                                    <a class="d-block" href="https://goocchohaanh.com/phong-ngu-go-oc-cho-dep/">Đôn Thờ</a>
                                </div>
                                <div class="list-categories__item">
                                    <a class="d-block" href="https://goocchohaanh.com/phong-bep-oc-cho/">Vách Thờ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('web.phong-tho.partials.ban-tho-items')
                </main>
            </div>
            <div class="block_general">
                @include('web.phong-tho.partials.block-general')
                @include('web.contact.partials.contact-global')
            </div>
        </div>
    </div>
@endsection
