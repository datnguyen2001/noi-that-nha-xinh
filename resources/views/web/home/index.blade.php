@extends('web.index')
@section('title','Trang chủ')

{{--content of page--}}
@section('content')
    @if(isset($bannerHome[0]))
    <div id="slider">
        <div class="slider-item">
            <noscript><img decoding="async" alt="img-slide" width="100%" height="100%"
                           data-src="{{asset($bannerHome[0]->src)}}" class="lazyload"
                           src="{{asset($bannerHome[0]->src)}}"/></noscript>
            <img decoding="async" alt="img-slide" width="100%" height="100%"
                 data-src="{{asset($bannerHome[0]->src)}}" class="lazyloaded"
                 src="{{asset($bannerHome[0]->src)}}"/></div>
    </div>
    @endif
    <div id="content" class="site-content">
        <div class="container">
            <main id="main" class="site-main" role="main">
                <section id="video-section" class="home-section">
                    @include('web.home.partials.video')
                </section>
                <section id="sale" class="sale-section home-section">
                    @include('web.home.partials.flash_sale')
                </section>
                @if(isset($header) && count($header)>0)
                    @foreach($header as $val)
                <section id="product-categories" class="product-categories product-goc home-section">
                    @include('web.home.partials.oc_cho_category')
                </section>
                    @endforeach
                @endif
            </main>
        </div>
        <section id="banner_pc" class="home-section homepage-banner">
            @include('web.home.partials.banner')
        </section>
        <div class="container">
            <main id="main" class="site-main" role="main">
                <section id="project-categories" class="project-section home-section">
                    @include('web.home.partials.project_category')
                </section>
                <section id="project-categories2" class="project-section home-section">
                    @include('web.home.partials.project_category_2')
                </section>
                <section id="video360" class="video360-section home-section">
                    @include('web.home.partials.full_video')
                </section>
                <!-- <section class="home-section" id="testimonials">
                    @include('web.home.partials.comment')
                </section> -->
                <section id="setofproduct" class="home-section">
                    @include('web.home.partials.collection')
                </section>
            </main>
        </div>
    </div>
@stop
