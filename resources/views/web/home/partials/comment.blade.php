@if(isset($comment) && count($comment)>0)
<div class="container">
    <div class="testimonials-wrap">
        <h2 class="heading">
            <span> Nhận xét của khách hàng </span>
        </h2>
        <div class="slick-carousel-comment blog-slider" data-item="3" data-item_md="3" data-item_sm="2"
             data-item_mb="1" data-row="1" data-autoplay="true" data-dots="false"
             data-arrows="true" data-vertical="false">
            @foreach($comment as $comments)
            <div class="item">
                <div class="item-content">
                    <div class="item-content_ct">
                        <div class="item-header">
                            <div class="item-header-content">
                                <div class="name">{{$comments->name_people}}</div>
                                <div class="position">{{$comments->name}}</div>
                                <div class="star">
                                    @for($i=1;$i<6;$i++)
                                        @if($i <= $comments->star)
                                            <i class="fa-solid fa-star" style="background-color: transparent;color: #ffe97d;font-size: 20px"></i>
                                        @endif
                                   @endfor
                                </div>
                            </div>
                        </div>
                        <div class="testimonials-image text-center mb-4 mt-4">
                            <div class="img">
                                <noscript><img decoding="async" width="100%" height="100%"
                                               loading="lazy"
                                               data-src="{{asset($comments->src)}}"
                                               class="d-inline-block lazyloaded"
                                               src="{{asset($comments->src)}}">
                                </noscript>
                                <img decoding="async" width="100%" height="100%" loading="lazy"
                                     data-src="{{asset($comments->src)}}"
                                     class="d-inline-block lazyloaded"
                                     src="{{asset($comments->src)}}">
                            </div>
                        </div>
                        <div class="testimonials-content">
                            <div class="content">
                                {{$comments->describe}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>
</div>
@endif
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.slick-carousel-comment').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });

</script>
