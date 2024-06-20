@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>{{$titlePage}}</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                <form action="{{url("admin/product/update",$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">Tên sản phẩm :</div>
                        <div class="col-8">
                            <input class="form-control" name="title" type="text" value="{{$data->name}}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <p class="m-0">Danh mục :</p>
                        </div>
                        <div class="col-9">
                            <div class="row m-0 border">
                                <div class="col-lg-4 pt-2 pb-2"
                                     style="border-right: 1px solid #dddddd; overflow: auto; max-height: 400px">
                                    @foreach($category_all as $key => $cate)
                                        <div class="d-flex align-items-center category p-1">
                                            <div class="d-flex align-items-center" style="margin-right: 10px">
                                                <input type="radio" style="width: 20px; height: 20px" id="cate{{$key}}"
                                                       value="{{$cate->id}}" name="category" @if($cate_big->parent_id == $cate->id) checked @elseif($cate_big->id == $cate->id) checked @endif></div>
                                            <label for="cate{{$key}}" class="m-0">{{$cate->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <div list_category_children class="col-lg-4 pb-2 pt-2"
                                     style="border-right: 1px solid #dddddd; overflow: auto; max-height: 400px">
                                    @foreach($category_child as $value)
                                        <div class="d-flex align-items-center category list_category_children p-1">
                                            <div class="d-flex align-items-center" style="margin-right: 10px">
                                                <input type="radio" style="width: 20px; height: 20px"
                                                       value="{{$value->id}}"
                                                       @if($data->category_id == $value->id) checked
                                                       @endif name="category_children">
                                            </div>
                                            <p class="m-0">{{$value->name}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Bảo hành</div>
                        <div class="col-8">
                            <input class="form-control" name="guarantee" value="{{$data->guarantee}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Chất liệu</div>
                        <div class="col-8">
                            <input class="form-control" name="material" value="{{$data->material}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Kích thước</div>
                        <div class="col-8">
                            <input class="form-control" name="size" value="{{$data->size}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Loại hàng</div>
                        <div class="col-8">
                            <input class="form-control" name="sectors" value="{{$data->sectors}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Nhà sản xuất</div>
                        <div class="col-8">
                            <input class="form-control" name="producer" value="{{$data->producer}}" type="text">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Vật liệu khác</div>
                        <div class="col-8">
                            <input class="form-control" name="other_materials" value="{{$data->other_materials}}" type="text">
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <div class="col-3 d-flex align-items-center">
                            <p class="m-0 parameter_2">Giá bán</p>
                        </div>
                        <div class="col-9">
                            <input class="form-control price format-currency" value="{{$data->price}}" name="price">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3 d-flex align-items-center">
                            <p class="m-0 parameter_2">Giá khuyến mãi</p>
                        </div>
                        <div class="col-9">
                            <input class="form-control price_promotional format-currency" value="{{$data->price_promotional}}" name="price_promotional">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Giá liên hệ :</div>
                        <div class="col-8">
                            <div class="form-check form-switch">
                                <input class="form-check-input" name="pricing" @if($data->pricing == 1) checked @endif type="checkbox"
                                       id="flexSwitchCheckChecked">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Liên hệ </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-3">Hình ảnh :</div>
                        <div class="col-8">
                            <div class="form-control position-relative div-parent" style="padding-top: 50%">
                                <div class="position-absolute w-100 h-100 div-file" style="top: 0; left: 0;z-index: 10">
                                    <button type="button" class="position-absolute clear border-0 bg-danger p-0 d-flex justify-content-center align-items-center" style="top: -10px;right: -10px;width: 30px;height: 30px;border-radius: 50%"><i class="bi bi-x-lg text-white"></i></button>
                                    <img src="{{asset($data->src)}}" class="w-100 h-100" style="object-fit: cover">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5 mt-4">
                        <div class="card-header bg-info text-white">
                            Hình ảnh sản phẩm
                        </div>
                        <div class="card-body">
                            <div class="image-uploader image_product has-files mt-2">
                                <div class="uploaded">
                                    @foreach($image as $value)
                                        <div class="uploaded-images">
                                            <img src="{{asset($value->src)}}">
                                            <button type="button" value="{{$value->id}}" class="delete__image"><i
                                                    class="bi bi-x"></i></button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-header bg-info text-white">
                            Cập nhập hình ảnh sản phẩm
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <label class="mt-2 mb-2"><i class="fa fa-upload"></i> Chọn hoặc kéo ảnh vào khung
                                    bên dưới</label>
                                <div class="input-image-product">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3 p-3">
                        <label for="content" class="form-label">Mô tả </label>
                        <textarea name="describe" id="describe" required
                                  class="ckeditor">{!! $data->describe !!}</textarea>
                    </div>
                    <div class="card mt-3 p-3">
                        <label for="content" class="form-label">Tại sao chọn chúng tôi </label>
                        <textarea name="why_choose_us" id="why_choose_us"
                                  class="ckeditor">{!! $data->why_choose_us !!}</textarea>
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
    <script src="{{url('assets/admin/js/format_currency.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/admin/js/input_file.js')}}" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('describe', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height:'700px'
        });
        CKEDITOR.replace('why_choose_us', {
            filebrowserUploadUrl: "{{route('admin.ckeditor.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form',
            height:'500px'
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $('input[name="category"]').click(function () {
            let value = $(this).val();
            $('input[name="category"]').prop("checked", false);
            $(this).prop("checked", true);
            $.ajax({
                url: window.location.origin + '/admin/category/get-children-c2',
                type: 'post',
                dataType: 'json',
                data: {"cate_id": value, "name": "category_children"},
                success: function (data) {
                    $("[list_category_children]").html(data.html);
                }
            });
        });
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

        $('button.delete__image').confirm({
            title: 'Xác nhận!',
            content: 'Bạn có chắc chắn muốn xóa bản ghi này?',
            buttons: {
                ok: {
                    text: 'Xóa',
                    btnClass: 'btn-danger',
                    action: function(){
                        let data = {};
                        data['id'] = this.$target.attr("value");
                        $.ajax({
                            url: window.location.origin + '/admin/product/delete-img-product',
                            data: data,
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            dataType: 'json',
                            type: 'post',
                            success: function (data) {
                                if (data.status){
                                    location.reload();
                                }
                            }
                        });
                    }
                },
                close: {
                    text: 'Hủy',
                    action: function () {}
                }
            }
        });

    </script>
@endsection
