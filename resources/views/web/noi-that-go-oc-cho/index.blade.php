@extends('web.index')
@section('title','Nội thất gỗ óc chó')

{{--content of page--}}
@section('content')
    <div id="content" class="site-content" style="padding-top: 30px">
        <div class="container">
            <div class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    <header class="woocommerce-products-header">
                        <h1 class="woocommerce-products-header__title page-title">
                            <span>Nội thất gỗ óc chó</span>
                        </h1>
                    </header>
                    @if(isset($category))
                    <div class="list-categories tan_co 123">
                        <div class="container">
                            <div class="list-categories__wrap">
                                @foreach($category as $categorys)
                                <div class="list-categories__item">
                                    <a class="d-block" href="https://goocchohaanh.com/phong-khach-go-oc-cho-dep/">{{$categorys->name}}</a>
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
                @include('web.noi-that-go-oc-cho.partials.block-general')
                @include('web.contact.partials.contact-global')
            </div>
        </div>
    </div>
@endsection
