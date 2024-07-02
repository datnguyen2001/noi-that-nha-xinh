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
                            <table class="table text-nowrap">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Họ và tên</th>
                                    <th scope="col">Điạ chỉ</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Ghi chú</th>
                                    <th scope="col">Thời gian</th>
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
                                            </td>
                                            <td>
                                                {{@$value->note}}
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($value->created_at)->format('m/d/Y') }}
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
