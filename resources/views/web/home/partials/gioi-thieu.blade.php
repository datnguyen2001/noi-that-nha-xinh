@extends('web.index')
@section('title','Giới thiệu')

{{--content of page--}}
@section('content')
    <div id="content" class="site-content">
        <div class="container" >
            <div id="primary" class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    <article id="post-145" class="post-145 page type-page status-publish has-post-thumbnail hentry">
                        <div class="entry-content">
                            <p>&nbsp;</p>
                            <h2 style="text-align: center;">{{$introduce->title ?? ''}}</h2>
                            <p>&nbsp;</p>
                            {!! $introduce->content ?? '' !!}
                        </div>

                    </article>
                </main>
            </div>
        </div>
    </div>

@endsection
