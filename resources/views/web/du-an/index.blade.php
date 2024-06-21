@extends('web.index')
@section('title','Dự án')

@section('content')
<div id="content" class="site-content" style="padding-top: 30px">
            <div class="container">
                <div id="primary" class="content-sidebar-wrap">
                    <main id="main" class="site-main" role="main">
                        @if(isset($cate_project) && count($cate_project)>0)
                        <div class="list-categories">
                            @foreach($cate_project as $item)
                            <div class="container mb-5">
                                <h2 class="heading">
                                    <a class="item-category" href="https://goocchohaanh.com/du-an/du-an-thiet-ke-go-oc-cho/">
                                        {{$item->name}}
                                    </a>
                                </h2>
                                <div class="sh-blog-shortcode style-2">
                                    <div class="row">
                                        @include('web.du-an.partials.thiet-ke')
                                    </div>
                                </div>
                                <div class="category-description">
                                    <div class="col-lg-8 offset-lg-2 mb-5">
                                        <p style="text-align: center;">
                                            {{$item->describe}}
                                        </p>
                                    </div>
                                </div>
                                <div class="categories-readmore text-center">
                                    <a class="item-category" href="https://goocchohaanh.com/du-an/du-an-thiet-ke-go-oc-cho/">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                                @endforeach
                        </div>
                        @endif
                        <div class="block_general">
                            <div class="page_contact mt-5">
                                @include('web.contact.partials.contact-global')
                            </div>
                        </div>
                        <section id="setofproduct" class="home-section">
                            @include('web.home.partials.collection')
                        </section>
                    </main>
                </div>
            </div>
        </div>
@endsection
