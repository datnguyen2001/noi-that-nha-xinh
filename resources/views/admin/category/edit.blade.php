@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{$titlePage}}</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                <form action="{{url("admin/category/update",$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">Tên danh mục :</div>
                        <div class="col-8">
                            <input class="form-control" name="title" value="{{$data->name}}" type="text" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label">Danh mục cha</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="parent_id"
                                    aria-label="Default select example" required>
                                <option value="0" selected>Làm danh mục cha</option>
                                @foreach($category as $value)
                                    <option class="bg-info" value="{{$value->id}}" @if($data->parent_id == $value->id) selected @endif>{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label">Thuộc loại</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="type"
                                    aria-label="Default select example" required>
                                <option class="bg-info" @if($data->type == 1) selected @endif value="1">Nội thất gỗ óc chó</option>
                                <option class="bg-info" @if($data->type == 2) selected @endif value="2">Nội thất tân cổ điển</option>
                                <option class="bg-info" @if($data->type == 3) selected @endif value="3">Phòng thờ</option>
                            </select>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header bg-info text-white">
                            Nội dung
                        </div>
                        <div class="card-body mt-2">
                            <textarea name="content" class="form-control" id="content" required>{!! @$data->content !!}</textarea>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-3"></div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{route('admin.category.index')}}" class="btn btn-danger">Hủy</a>
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
            height:'700px'
        });
    </script>
@endsection
