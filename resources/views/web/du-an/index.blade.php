@extends('web.index')
@section('title','Dự án')

@section('content')
<div id="content" class="site-content" style="padding-top: 30px">
            <div class="container">
                <div id="primary" class="content-sidebar-wrap">
                    <main id="main" class="site-main" role="main">
                        <div class="list-categories">
                            <div class="container">
                                <h2 class="heading">
                                    <a class="item-category" href="https://goocchohaanh.com/du-an/du-an-thiet-ke-go-oc-cho/">
                                        Dự án thiết kế
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
                                            Với bề sâu kinh nghiệm hơn 15 năm trong ngành nội thất chúng tôi đã thiết kế nội thất hàng trăm các công trình và dự án khắp các tỉnh phía Bắc như: Hà Nội, Thanh Hóa, Hải Dương, Hải Phòng…
                                        </p>
                                    </div>
                                </div>
                                <div class="categories-readmore text-center">
                                    <a class="item-category" href="https://goocchohaanh.com/du-an/du-an-thiet-ke-go-oc-cho/">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="list-categories">
                            <div class="container">
                                <h2 class="heading">
                                    <a class="item-category" href="https://goocchohaanh.com/du-an/du-an-thi-cong-go-oc-cho/">
                                        Dự án thi công
                                    </a>
                                </h2>
                                <div class="sh-blog-shortcode style-2">
                                    <div class="row">
                                        @include('web.du-an.partials.thi-cong')
                                    </div>
                                </div>
                                <div class="category-description">
                                    <div class="col-lg-8 offset-lg-2 mb-5">
                                        <p style="text-align: center;">
                                            Các dự án thiết kế và thi công tại Nội Thất Hà Anh luôn mang đến cho khách hàng sự hài hòng với đội ngũ nhân viên chuyên nghiệp và tận tâm. Với nhiều phong cách thiết kế đa dạng, phù hợp với mọi không gian từ hiện đại đến cổ điển.
                                        </p>
                                    </div>
                                </div>
                                <div class="categories-readmore text-center">
                                    <a class="item-category" href="https://goocchohaanh.com/du-an/du-an-thi-cong-go-oc-cho/">
                                        Xem thêm
                                    </a>
                                </div>
                            </div>
                        </div>
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
