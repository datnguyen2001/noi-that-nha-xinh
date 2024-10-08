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
                        <div class="col-3">Thể loại :</div>
                        <div class="col-8">
                            <select name="selection" class="form-control" required>
                                <option value="1" @if($data->selection == 1) selected @endif>Video dự án</option>
                                <option value="2" @if($data->selection == 2) selected @endif>Video sản phẩm</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Hình ảnh :</div>
                        <div class="col-8">
                            <div class="form-control position-relative div-parent" style="padding-top: 50%">
                                <div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">
                                    <button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>
                                    <img src="{{asset($data->image)}}" class="w-100 h-100" style="object-fit: cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="file" name="file" accept="image/x-png,image/gif,image/jpeg" hidden>
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
    <script>
        let parent;
        $(document).on("click", ".select-image", function () {
            $('input[name="file"]').click();
            parent = $(this).parent();
        });
        $('input[type="file"]').change(function(e){
            imgPreview(this);
        });
        function imgPreview(input) {
            let file = input.files[0];
            let mixedfile = file['type'].split("/");
            let filetype = mixedfile[0]; // (image, video)
            if(filetype == "image"){
                let reader = new FileReader();
                reader.onload = function(e){
                    $("#preview-img").show().attr("src", );
                    let html = '<div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">' +
                        '<button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>'+
                        '<img src="'+e.target.result+'" class="w-100 h-100" style="object-fit: cover">' +
                        '</div>';
                    parent.html(html);
                }
                reader.readAsDataURL(input.files[0]);
            }else if(filetype == "video" || filetype == "mp4"){
                let html = '<div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">' +
                    '<button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%;z-index: 14"><i class="bi bi-x-lg text-white"></i></button>'+
                    '<video class="w-100 h-100" style="object-fit: cover" controls>\n' +
                    '<source src="'+URL.createObjectURL(input.files[0])+'"></video>'+
                    '</div>';
                parent.html(html);
            }else{
                alert("Invalid file type");
            }
        }
        $(document).on("click", "button.clear", function () {
            parent = $(this).closest(".div-parent");
            $(".div-file").remove();
            let html = '<button type="button" class="position-absolute border-0 bg-transparent select-image" style="top: 50%;left: 50%;transform: translate(-50%,-50%)">\n' +
                '                                    <i style="font-size: 30px" class="bi bi-download"></i>\n' +
                '                                </button>';
            parent.html(html);
            $('input[type="file"]').val("");
        });

    </script>
@endsection
