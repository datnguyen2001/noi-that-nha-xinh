@if(isset($item->post))
    @foreach($item->post as $val)
<article id="post-8883" class="element post-item item-new col-md-6 post-8883 post type-post status-publish format-standard has-post-thumbnail hentry category-du-an category-du-an-thiet-ke-go-oc-cho">
    <div class="post-inner">
        <div class="entry-thumb">
            <a class="d-block" href="{{route('du-an-details', $val->slug)}}"
               title="{{$val->name}}">
                <img width="100%" height="100%"
                     alt="{{$val->name}}"
                     decoding="async" fetchpriority="high"
                     data-srcset="{{asset($val->src)}}"
                     data-sizes="(max-width: 1920px) 100vw, 1920px"
                     class="attachment-sh_thumb300x200 size-sh_thumb300x200 wp-post-image lazyloaded"
                     src="{{asset($val->src)}}" />
            </a>
        </div>
        <div class="entry-content">
            <h2 class="entry-title">
                <a href="{{route('du-an-details', $val->slug)}}"
                   title="{{$val->name}}">
                    {{$val->name}}
                </a>
            </h2>
        </div>
    </div>
</article>
@endforeach
@endif
