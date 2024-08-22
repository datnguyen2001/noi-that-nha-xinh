<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\InformationModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $titlePage = 'Trang chủ';
        $page_menu = 'dashboard';
        $page_sub = null;
        return view('admin.index', compact('titlePage', 'page_menu', 'page_sub'));
    }

    public function dashboard(Request $request)
    {
        $titlePage = 'Tổng quan';
        $page_menu = 'dashboard';
        $page_sub = null;

        // Doanh số theo tháng
        $monthYear = $request->get('date') ?: date('Y-m');
        $firstDayOfMonth = Carbon::createFromFormat('Y-m', $monthYear)->startOfMonth();
        $lastDayOfMonth = $firstDayOfMonth->copy()->endOfMonth();
        $dailySalesData = [];
        $totalMonthlySales = 0;
        $currentDate = $firstDayOfMonth;

        while ($currentDate <= $lastDayOfMonth) {
            $dailySales = DB::table('order')
                ->where('status', 1) // Chỉ tính những đơn hàng đã xác nhận
                ->whereDate('created_at', $currentDate)
                ->sum('total_money');

            $totalMonthlySales += $dailySales;
            $dailySalesData[$currentDate->format('Y-m-d')] = $dailySales ?: 0;
            $currentDate->addDay();
        }

        return view('admin.dashboard', compact('titlePage', 'page_menu', 'page_sub', 'dailySalesData', 'totalMonthlySales'));
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('userfiles'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('userfiles/' . $fileName);
            $msg = 'Image successfully uploaded';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }

    public function information()
    {
        $titlePage = 'Danh sách đăng ký thông tin';
        $page_menu = 'information';
        $page_sub = null;
        $listData = InformationModel::orderBy('created_at', 'desc')->paginate(15);

        return view('admin.information.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function order(Request $request)
    {
        $titlePage = 'Danh sách đơn hàng';
        $page_menu = 'order';
        $page_sub = null;
        if (isset($request->key_search)) {
            $listData = OrderModel::where('name', 'like', '%' . $request->get('key_search') . '%')->orWhere('phone', 'like', '%' . $request->get('key_search') . '%')->paginate(15);
        } else {
            $listData = OrderModel::orderBy('created_at', 'desc')->paginate(15);
        }
        foreach ($listData as $val) {
            $val->name_product = ProductModel::find($val->product_id)->name;
        }

        return view('admin.order.index', compact('titlePage', 'page_menu', 'page_sub', 'listData'));
    }

    public function statusOrder($order_id, $status)
    {
        try {
            $order = OrderModel::find($order_id);
            if ($order) {
                $order->status = $status;
                $order->save();
                if ($status == 2) {
                    $product = ProductModel::find($order->product_id);
                    $product->quantity = $product->quantity + $order->quantity;
                    $product->save();
                }
                return \redirect()->route('admin.order')->with(['success' => 'Xét trạng thái đơn hàng thành công']);
            }

        } catch (\Exception $exception) {
            dd($exception);
        }
    }

    public function editOrder($id)
    {
        try {
            $data = OrderModel::find($id);
            $data->name_product = ProductModel::find($data->product_id)->name;
            $titlePage = 'Cập nhật đơn hàng';
            $page_menu = 'order';
            $page_sub = null;
            return view('admin.order.edit', compact('titlePage', 'page_menu', 'page_sub', 'data'));
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception->getMessage()]);
        }
    }

    public function updateOrder($id, Request $request)
    {
        try {
            $data = OrderModel::find($id);
            $quantity = $data->quantity;
            $data->name = $request->get('name');
            $data->phone = $request->get('phone');
            $data->email = $request->get('email');
            $data->address = $request->get('address');
            $data->note = $request->get('note');
            $data->quantity = $request->get('quantity');
            $data->total_money = $request->get('quantity')*$data->price;
            $data->status = $request->get('status');
            $data->save();
            $product = ProductModel::find($data->product_id);
            if ($request->get('status') == 2) {
                $product->quantity = $product->quantity + $data->quantity;
                $product->save();
            } else {
                $number = ($product->quantity + $quantity) - $data->quantity;
                if ($number < 0) {
                    toastr()->error('Sản phẩm ' . $product->name . ' vượt quá số lượng trong kho');
                    return redirect()->back();
                }
                $product->quantity = $number;
                $product->save();
            }
            return redirect()->route('admin.order')->with(['success' => 'Cập nhật đơn hàng thành công']);
        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);
        }
    }
}
