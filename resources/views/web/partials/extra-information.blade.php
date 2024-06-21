<aside class="sidebar sidebar-primary w-100" role="complementary" itemscope itemtype="https://schema.org/WPSideBar">
    <section id="list_posts-5" class="widget widget_list_posts">
        <h2 class="widget-title">Tin tức &#8211; Khuyến mãi</h2>
        @if(isset($list_new) && count($list_new)>0)
        <ul class="list-post-item">
            @foreach($list_new as $news)
            <li id="post-2986" class="clearfix post-2986 post type-post status-publish format-standard has-post-thumbnail hentry category-khuyen-mai category-bai-viet-noi-bat">
                <a class="img alignleft" href="{{route('phong-cach-noi-that')}}" title="{{$news->name}}">
                    <img width="100%" height="100%"   alt="{{$news->name}}" decoding="async"
                         data-srcset="{{asset($news->src)}}"
                         class="attachment-sh_thumb300x200 size-sh_thumb300x200 wp-post-image lazyloaded"
                         src="{{asset($news->src)}}" />
                </a>
                <h3>
                    <a href="{{route('phong-cach-noi-that')}}"
                       title="{{$news->name}}">
                        {{$news->name}}
                    </a>
                </h3>
            </li>
                @endforeach
        </ul>
            @endif
    </section>
    <section id="supports-3" class="widget widget_supports">
        <h2 class="widget-title">Hỗ trợ trực tuyến</h2>
        <div class="wrap-support">
            <div id="supporter-info" class="list-supporter support-style-2">
                <div id="support-1" class="supporter">
                    <ul>
                        <li class="hotline">
                                        <span class="icon">
                                            <img  alt="Hotline" data-src="https://goocchohaanh.com/wp-content/themes/goocchohaanh/lib/images/hotline.svg"
                                                  class="lazyloaded" src="https://goocchohaanh.com/wp-content/themes/goocchohaanh/lib/images/hotline.svg">
                                        </span>
                            Hotline: {{@$setting->hotline}}
                        </li>
                        <li class="phone">
                                        <span class="icon">
                                            <img  alt="Phone" data-src="https://goocchohaanh.com/wp-content/themes/goocchohaanh/lib/images/phone.svg" class="lazyloaded"
                                                  src="https://goocchohaanh.com/wp-content/themes/goocchohaanh/lib/images/phone.svg"></span>
                            Số điện thoại: {{@$setting->phone}}
                        </li>
                        <li class="email">
                                        <span class="icon">
                                            <img  alt="Email" data-src="https://goocchohaanh.com/wp-content/themes/goocchohaanh/lib/images/email.svg" class="lazyloaded"
                                                  src="https://goocchohaanh.com/wp-content/themes/goocchohaanh/lib/images/email.svg">
                                        </span>
                            Email: {{@$setting->email}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="custom_html-14" class="widget_text widget widget_custom_html">
        <h2 class="widget-title">Dịch vụ</h2>
        <div class="textwidget custom-html-widget">
            <ul class="box-contact">
                @foreach($project as $projectes)
                <li class="design-contact">
                    <a href="{{route('du-an.details',$projectes->slug)}}"> {{$projectes->name}} </a>
                </li>
               @endforeach
                <li class="order-contact">
                    <a href="{{route('lien-he')}}"> Liên hệ đặt hàng </a>
                </li>
            </ul>
        </div>
    </section>
</aside>
