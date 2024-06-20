@extends('admin.layout.index')
@section('title', 'Giới thiệu')

@section('style')

@endsection

@section('main')
    <main id="main" class="main d-flex flex-column justify-content-center">
        <div class="">
            <h1 class="h3 mb-4 text-gray-800">{{$titlePage}}</h1>
            <hr>
            <form action="{{ route('admin.contact_us.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-3">Tiêu đề :</div>
                    <div class="col-8">
                        <input class="form-control" name="title" value="{{@$data->name}}" type="text">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">Địa chỉ office :</div>
                    <div class="col-8">
                        <input class="form-control" name="address_office" value="{{@$data->address_office}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">Hotline :</div>
                    <div class="col-8">
                        <input class="form-control" name="hotline" value="{{@$data->hotline}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">Số điện thoại :</div>
                    <div class="col-8">
                        <input class="form-control" name="phone" value="{{@$data->phone}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">Email :</div>
                    <div class="col-8">
                        <input class="form-control" name="email" value="{{@$data->email}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">Website :</div>
                    <div class="col-8">
                        <input class="form-control" name="website" value="{{@$data->website}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">Map office :</div>
                    <div class="col-8">
                        <input class="form-control" name="map_office" value="{{@$data->map_office}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">Địa chỉ nhà máy sản xuất :</div>
                    <div class="col-8">
                        <input class="form-control" name="address_factory" value="{{@$data->address_factory}}" type="text" >
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">Map nhà máy sản xuất :</div>
                    <div class="col-8">
                        <input class="form-control" name="map_office" value="{{@$data->map_factory}}" type="text" >
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>

    </main>
@endsection
@section('script')

@endsection
