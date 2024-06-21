@extends('web.index')
@section('title',$supportDetails->name)

{{--content of page--}}
@section('content')
    <div id="content" class="site-content" style="padding-top: 30px; padding-bottom: 30px">
        <div class="container">
            <div id="primary" class="content-sidebar-wrap">
                <main id="main" class="site-main" role="main">
                    <div class="entry-content">
                        <h1 class="entry-title title-page" style="text-align: justify; padding-left: 90px;">
                            <span style="font-size: 24px;">{{$supportDetails->title}}</span>
                        </h1>
                        <div style="padding-left: 60px;">
                            <table style="border-collapse: collapse; width: 82.5243%; height: 24px; margin-left: 30px;" border="1">
                                <tbody>
                                <tr style="height: 24px;">
                                    <td style="width: 100%; height: 24px;">
                                        {!! $supportDetails->content !!}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
