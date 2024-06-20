@extends('web.index')
@section('title','Liên hệ')

{{--content of page--}}
@section('content')
<div id="content" class="site-content" style="padding: 30px 0">
    <div class="container">
        <div id="primary" class="content-sidebar-wrap">
            <main id="main" class="site-main" role="main">
                <article id="post-823" class="post-823 page type-page status-publish hentry">
                    <header class="entry-header">
                        <h1 class="page-title title_page_content">
                            <span>Liên hệ</span>
                        </h1>
                    </header>
                    @include('web.contact.partials.contact-global')
                </article>
            </main>
        </div>
    </div>

</div>
@endsection
