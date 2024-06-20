@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cập nhật hỗ trợ</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                <form action="{{url("admin/customer_support/update",$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">Tên hỗ trợ :</div>
                        <div class="col-8">
                            <input class="form-control" name="name" type="text" value="{{$data->name}}" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Tiêu đề :</div>
                        <div class="col-8">
                            <input class="form-control" name="title" type="text" value="{{$data->title}}" required>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header bg-info text-white">
                            Nội dung
                        </div>
                        <div class="card-body mt-2">
                            <textarea name="content" class="ckeditor" required>{!! $data->content !!}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-3"></div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{route('admin.customer_support.index')}}" class="btn btn-danger">Hủy</a>
                        </div>
                        <input type="file" name="file" accept="image/x-png,image/gif,image/jpeg" hidden>
                    </div>
                </form>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
@section('script')
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height:'600px'
        });
    </script>
@endsection
