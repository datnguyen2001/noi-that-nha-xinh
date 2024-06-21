@extends('web.index')
@section('title',$menu->name)

{{--content of page--}}
@section('content')
    <div id="content" class="site-content" style="padding-top: 30px">
        <div class="container">
            <div class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    <header class="woocommerce-products-header">
                        <h1 class="woocommerce-products-header__title page-title">
                            <span>{{$menu->name}}</span>
                        </h1>
                    </header>
                    @if(isset($category))
                    <div class="list-categories tan_co 123">
                        <div class="container">
                            <div class="list-categories__wrap">
                                @foreach($category as $categorys)
                                <div class="list-categories__item">
                                    <a class="d-block" href="{{ route('category',$categorys->slug) }}">{{$categorys->name}}</a>
                                </div>
                               @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    @include('web.noi-that-go-oc-cho.partials.oc-cho-items')
                </main>
            </div>
            <div class="block_general">
                <div class="page_content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="expand_description">
                                <div class="expand_description__wrap" style="height: 1090px">
                                    <h2 class="heading-left"> {{$menu->name}} </h2>
                                    <div id="fb-root" class="fb-reset">
                                        {!! @$menu->content !!}
                                    </div>
{{--                                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=3216890988410923&autoLogAppEvents=1" nonce="PLJqAfmE"></script>--}}
{{--                                    <div class="fb-like" data-href="https://goocchohaanh.com/product/ban-an-go-oc-cho-hb-8064/"--}}
{{--                                         data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true">--}}
{{--                                    </div>--}}
                                </div>
                                <div class="expand_description__readmore remore_more">
                                    <a title="Xem thêm" href="javascript:void(0);">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            @include('web.partials.extra-information')
                        </div>
                    </div>
                </div>
                @include('web.contact.partials.contact-global')
            </div>
        </div>
    </div>
@endsection
