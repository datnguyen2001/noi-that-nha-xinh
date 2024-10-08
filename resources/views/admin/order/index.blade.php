@extends('admin.layout.index')
@section('main')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">{{$titlePage}}</h5>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <form class="d-flex align-items-center w-50" method="get"
                                      action="{{route('admin.order')}}">
                                    <input name="key_search" type="text" value="{{request()->get('key_search')}}"
                                           placeholder="Tìm kiếm tên khách hàng và số điện thoại" class="form-control" style="margin-right: 16px">
                                    <button class="btn btn-info" style="padding-top: 5px;padding-bottom: 5px"><i class="bi bi-search"></i></button>
                                    <a href="{{route('admin.order')}}" class="btn btn-danger" style="margin-left: 15px">Hủy </a>
                                </form>
                            </div>
                            <table class="table text-nowrap">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Điạ chỉ</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Ghi chú</th>
                                    <th scope="col">Thời gian</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">...</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(count($listData))
                                    @foreach($listData as $key => $value)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>
                                                {{$value->name}}
                                                <br>
                                                {{$value->phone}}
                                                <br>
                                                {{$value->email}}
                                            </td>
                                            <td>
                                                {{@$value->address}}
                                            </td>
                                            <td>
                                                {{$value->name_product}}
                                                <br>
                                                @if($value->quantity > 0)
                                                Số lượng: {{$value->quantity}}
                                                    @else
                                                    Số lượng: Liên hệ
                                                @endif
                                                <br>
                                                @if($value->total_money)
                                                Tổng tiền: {{number_format($value->total_money)}} VND
                                                    @else
                                                    Giá: Liên hệ
                                                    @endif
                                            </td>
                                            <td>
                                                {{@$value->note}}
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($value->created_at)->format('m/d/Y') }}
                                            </td>
                                            <td>
                                                @if($value->status ==1)
                                                    Đã xác nhận
                                                    @elseif($value->status == 2)
                                                    Giao hàng
                                                @elseif($value->status == 3)
                                                    Thành công
                                                @elseif($value->status == 4)
                                                    Hủy
                                                @else
                                                    Chờ xác nhận
                                                @endif
                                            </td>
                                            <td>
                                                @if($value->status ==0)
                                                    <a href="{{url('admin/order-status/'.$value->id.'/1')}}" class="btn btn-success">Xác nhận</a>
                                                    <a href="{{url('admin/order-status/'.$value->id.'/4')}}" class="btn btn-danger">Từ chối</a>
                                                    @elseif($value->status ==1)
                                                    <a href="{{url('admin/order-status/'.$value->id.'/2')}}" class="btn btn-success">Giao hàng</a>
                                                    <a href="{{url('admin/order-status/'.$value->id.'/4')}}" class="btn btn-danger">Từ chối</a>
                                                @elseif($value->status ==2)
                                                    <a href="{{url('admin/order-status/'.$value->id.'/3')}}" class="btn btn-success">Thành công</a>
                                                    <a href="{{url('admin/order-status/'.$value->id.'/4')}}" class="btn btn-danger">Từ chối</a>
                                                @endif
                                                    <a href="{{url('admin/edit-order/'.$value->id)}}"
                                                       class="btn btn-icon btn-light btn-hover-success btn-sm"
                                                       data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                       data-bs-original-title="Cập nhật">
                                                        <i class="bi bi-pencil-square "></i>
                                                    </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                @else
                                    <tr>
                                        <td colspan="6" class="text-center" style="color: red;font-size: 18px">Không có dữ liệu</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $listData->appends(request()->all())->links('admin.pagination_custom.index') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->
@endsection
@section('script')

@endsection
