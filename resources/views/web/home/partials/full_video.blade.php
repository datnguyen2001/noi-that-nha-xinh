<div class="container">
    <h2 class="heading">
        <span>
            <a href="{{route('introduction')}}">Xem toàn bộ video</a>
        </span>
    </h2>
    <div class="row">
        @if(isset($video[0]))
            <div class="col-lg-8">
                <div class="listVideo-slider" data-item="1" data-item_md="1"
                     data-item_sm="1" data-item_mb="1" data-row="1" data-dots="false"
                     data-arrows="true" data-autoplay="true" data-vertical="false">
                    <div class="video_item">
                        <div class="video__inner">
                            <a href="{{route('introduction')}}" class="d-block fancy_boxVideo">
                                <noscript>
                                    <img decoding="async" alt="{{@$video[0]->name}}"
                                         data-src="{{asset(@$video[0]->image)}}"
                                         class="lazyloaded"
                                         src="{{asset(@$video[0]->image)}}"/>
                                </noscript>
                                <img decoding="async" alt="{{@$video[0]->name}}"
                                     data-src="{{asset(@$video[0]->image)}}"
                                     class="lazyloaded"
                                     src="{{asset(@$video[0]->image)}}" style="width: 100%;"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="col-lg-4">
            <div class="list_video row">
                @if(isset($video[1]))
                    <div class="item_video col-lg-12 col-6">
                        <a href="{{route('introduction')}}" class="d-block fancy_boxVideo">
                            <noscript>
                                <img decoding="async" alt="{{@$video[1]->name}}"
                                     data-src="{{asset(@$video[1]->image)}}"
                                     class="lazyloaded"
                                     src="{{asset(@$video[1]->image)}}"/>
                            </noscript>
                            <img decoding="async" alt="{{@$video[1]->name}}"
                                 data-src="{{asset(@$video[1]->image)}}"
                                 class="lazyloaded"
                                 src="{{asset(@$video[1]->image)}}" style="width: 100%;"/>
                        </a>
                    </div>
                @endif
                @if(isset($video[2]))
                    <div class="item_video col-lg-12 col-6">
                        <a href="{{route('introduction')}}" class="d-block fancy_boxVideo">
                            <noscript>
                                <img decoding="async" alt="{{@$video[2]->name}}"
                                     data-src="{{asset(@$video[2]->image)}}"
                                     class="lazyloaded"
                                     src="{{asset(@$video[2]->image)}}"/>
                            </noscript>
                            <img decoding="async" alt="{{@$video[2]->name}}"
                                 data-src="{{asset(@$video[2]->image)}}"
                                 class="lazyloaded"
                                 src="{{asset(@$video[2]->image)}}" style="width: 100%;"/>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="list_video row">
        @if(isset($video[3]))
            <div class="item_video col-lg-4 col-6">
                <a href="{{route('introduction')}}" class="d-block fancy_boxVideo">
                    <noscript>
                        <img decoding="async" alt="{{@$video[3]->name}}"
                             data-src="{{asset(@$video[3]->image)}}"
                             class="lazyloaded"
                             src="{{asset(@$video[3]->image)}}"/>
                    </noscript>
                    <img decoding="async" alt="{{@$video[3]->name}}"
                         data-src="{{asset(@$video[3]->image)}}"
                         class="lazyloaded"
                         src="{{asset(@$video[3]->image)}}" style="width: 100%;"/>
                </a>
            </div>
        @endif
        @if(isset($video[4]))
            <div class="item_video col-lg-4 col-6">
                <a href="{{route('introduction')}}" class="d-block fancy_boxVideo">
                    <noscript>
                        <img decoding="async" alt="{{@$video[4]->name}}"
                             data-src="{{asset(@$video[4]->image)}}"
                             class="lazyloaded"
                             src="{{asset(@$video[4]->image)}}"/>
                    </noscript>
                    <img decoding="async" alt="{{@$video[4]->name}}"
                         data-src="{{asset(@$video[4]->image)}}"
                         class="lazyloaded"
                         src="{{asset(@$video[4]->image)}}" style="width: 100%;"/>
                </a>
            </div>
        @endif
        @if(isset($video[5]))
            <div class="item_video col-lg-4 col-6">
                <a href="{{route('introduction')}}" class="d-block fancy_boxVideo">
                    <noscript>
                        <img decoding="async" alt="{{@$video[5]->name}}"
                             data-src="{{asset(@$video[5]->image)}}"
                             class="lazyloaded"
                             src="{{asset(@$video[5]->image)}}"/>
                    </noscript>
                    <img decoding="async" alt="{{@$video[5]->name}}"
                         data-src="{{asset(@$video[5]->image)}}"
                         class="lazyloaded"
                         src="{{asset(@$video[5]->image)}}" style="width: 100%;"/>
                </a>
            </div>
        @endif
    </div>
</div>

