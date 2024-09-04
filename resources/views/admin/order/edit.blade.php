@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Cập nhật đơn hàng</h1>
        </div><!-- End Page Title -->
        <section class="section dashboard">
            <div class="bg-white p-4">
                <form action="{{url("admin/update-order",$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-3">Họ và tên khách hàng :</div>
                        <div class="col-8">
                            <input class="form-control" name="name" type="text" value="{{$data->name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">Số điện thoại :</div>
                        <div class="col-8">
                            <input class="form-control" name="phone" type="text" value="{{$data->phone}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">Email :</div>
                        <div class="col-8">
                            <input class="form-control" name="email" type="text" value="{{$data->email}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">Địa chỉ :</div>
                        <div class="col-8">
                            <input class="form-control" name="address" type="text" value="{{$data->address}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">Note :</div>
                        <div class="col-8">
                            <input class="form-control" name="note" type="text" value="{{$data->note}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">Tên sản phẩm :</div>
                        <div class="col-8">
                            <input class="form-control" name="product" type="text" value="{{$data->name_product}}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-3">Số lượng mua :</div>
                        <div class="col-8">
                            <input class="form-control" name="quantity" type="text" value="{{$data->quantity}}">
                        </div>
                    </div>
                    @if($data->total_money)
                        <div class="row mb-3">
                            <div class="col-3">Giá của từng cái :</div>
                            <div class="col-8">
                                <input class="form-control" name="price" type="text" value="{{number_format($data->price)}}" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">Tổng tiền :</div>
                            <div class="col-8">
                                <input class="form-control" name="total_money" type="text" value="{{number_format($data->total_money)}}" disabled>
                            </div>
                        </div>
                        @else
                        <div class="row">
                            <div class="col-3">Giá :</div>
                            <div class="col-8">
                                <input class="form-control" name="price" type="text" value="Liên hệ" disabled>
                            </div>
                        </div>
                        @endif
                    <div class="row mt-3">
                        <div class="col-3">Trạng thái :</div>
                        <div class="col-8">
                            <select name="status" class="form-control" required>
                                <option value="0" @if($data->status == 0) selected @endif>Chờ xác nhận</option>
                                <option value="1" @if($data->status == 1) selected @endif>Xác nhận</option>
                                <option value="2" @if($data->status == 2) selected @endif>Từ chối</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-3"></div>
                        <div class="col-8">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            <a href="{{route('admin.order')}}" class="btn btn-danger">Hủy</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
@section('script')

@endsection
