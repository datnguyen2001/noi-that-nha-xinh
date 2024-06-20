@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tạo video</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                <form action="{{url("admin/video/update",$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-3">
                        <div class="col-3">Tên video</div>
                        <div class="col-8">
                            <input class="form-control" name="name" value="{{$data->name}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Chủ đầu tư</div>
                        <div class="col-8">
                            <input class="form-control" name="investor" value="{{$data->investor}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Địa chỉ thi công</div>
                        <div class="col-8">
                            <input class="form-control" name="construction_address" value="{{$data->construction_address}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Loại hình</div>
                        <div class="col-8">
                            <input class="form-control" name="type" value="{{$data->type}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Phong cách thiết kế</div>
                        <div class="col-8">
                            <input class="form-control" name="design_style" value="{{$data->design_style}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Vật liệu chính</div>
                        <div class="col-8">
                            <input class="form-control" name="main_material" value="{{$data->main_material}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Đơn vị thiết kế</div>
                        <div class="col-8">
                            <input class="form-control" name="design_unit" value="{{$data->design_unit}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Tổng diện tích XD</div>
                        <div class="col-8">
                            <input class="form-control" name="total_construction_area" value="{{$data->total_construction_area}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Năm thực hiện</div>
                        <div class="col-8">
                            <input class="form-control" name="year_implementation" value="{{$data->year_implementation}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Video</div>
                        <div class="col-8">
                            <input class="form-control" name="src" value="{{$data->src}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Bật/tắt :</div>
                        <div class="col-8">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="display" @if($data->display == 1) checked @endif type="checkbox"
                                       id="flexSwitchCheckChecked">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Hiện </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-3"></div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{route('admin.video.index')}}" class="btn btn-danger">Hủy</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
@section('script')

@endsection
