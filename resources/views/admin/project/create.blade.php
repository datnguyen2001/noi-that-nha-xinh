@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{$titlePage}}</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                <form action="{{route('admin.project.store-info')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">Tên dự án :</div>
                        <div class="col-8">
                            <input class="form-control" name="title" type="text" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Loại dự án :</div>
                        <div class="col-8">
                            <select class="form-control" name="project_id" required>
                                @foreach($category as $val)
                                <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Chủ đầu tư</div>
                        <div class="col-8">
                            <input class="form-control" name="investor" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Địa chỉ thi công</div>
                        <div class="col-8">
                            <input class="form-control" name="construction_address" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Loại hình</div>
                        <div class="col-8">
                            <input class="form-control" name="type" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Phong cách thiết kế</div>
                        <div class="col-8">
                            <input class="form-control" name="design_style" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Vật liệu chính</div>
                        <div class="col-8">
                            <input class="form-control" name="main_material" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Đơn vị thiết kế</div>
                        <div class="col-8">
                            <input class="form-control" name="design_unit" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Tổng diện tích XD</div>
                        <div class="col-8">
                            <input class="form-control" name="total_construction_area" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Năm thực hiện</div>
                        <div class="col-8">
                            <input class="form-control" name="year_implementation" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Hình ảnh :</div>
                        <div class="col-8">
                            <div class="form-control position-relative" style="padding-top: 50%">
                                <button type="button" class="position-absolute border-0 bg-transparent select-image" style="top: 50%;left: 50%;transform: translate(-50%,-50%)">
                                    <i style="font-size: 30px" class="bi bi-download"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header bg-info text-white">
                            Hình ảnh sản phẩm
                        </div>
                        <div class="card-body">
                            <label class="mt-2 mb-2"><i class="fa fa-upload"></i> Chọn hoặc kéo ảnh vào khung bên
                                dưới</label>
                            <div class="input-image-product">
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 p-3">
                        <label for="content" class="form-label">Nội dung </label>
                        <textarea name="content" id="content" required
                                  class="ckeditor">{{ old('content') }}</textarea>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Bật/tắt :</div>
                        <div class="col-8">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="display" checked type="checkbox"
                                       id="flexSwitchCheckChecked">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Hiện </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-12 d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mx-3">Tạo</button>
                            <a href="{{route('admin.project.info')}}" class="btn btn-danger">Hủy</a>
                        </div>
                        <input type="file" name="file" accept="image/x-png,image/gif,image/jpeg" hidden>
                    </div>
                </form>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
@section('script')
    <script src="{{url('assets/admin/js/input_file.js')}}" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height:'700px'
        });
    </script>
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
