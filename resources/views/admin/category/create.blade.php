@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{$titlePage}}</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">Tên danh mục :</div>
                        <div class="col-8">
                            <input class="form-control" name="title" type="text" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label">Danh mục cha</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="parent_id"
                                    aria-label="Default select example" required>
                                <option value="0" selected>Làm danh mục cha</option>
                                @foreach($category as $value)
                                    <option class="bg-info" value="{{$value->id}}">{{$value->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-3 col-form-label">Thuộc loại</label>
                        <div class="col-sm-8">
                            <select class="form-select" name="type"
                                    aria-label="Default select example" required>
                                <option class="bg-info" value="1">Nội thất gỗ óc chó</option>
                                <option class="bg-info" value="2">Nội thất tân cổ điển</option>
                                <option class="bg-info" value="3">Phòng thờ</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-3"></div>
                        <div class="col-8 ">
                            <button type="submit" class="btn btn-primary">Tạo</button>
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

@endsection
