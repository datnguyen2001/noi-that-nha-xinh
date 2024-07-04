<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\InformationModel;
use App\Models\OrderModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $titlePage = 'Trang chủ';
        $page_menu = 'dashboard';
        $page_sub = null;
        return view('admin.index', compact('titlePage','page_menu','page_sub'));
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('upload')->move(public_path('userfiles'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('userfiles/'.$fileName);
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
        $listData = InformationModel::orderBy('created_at','desc')->paginate(15);

        return view('admin.information.index',compact('titlePage','page_menu','page_sub','listData'));
    }

    public function order(Request $request)
    {
        $titlePage = 'Danh sách đơn hàng';
        $page_menu = 'order';
        $page_sub = null;
        if (isset($request->key_search)) {
            $listData = OrderModel::where('name', 'like', '%' . $request->get('key_search') . '%')->orWhere('phone', 'like', '%' . $request->get('key_search') . '%')->paginate(15);
        }else {
            $listData = OrderModel::orderBy('created_at', 'desc')->paginate(15);
        }
        foreach ($listData as $val){
            $val->name_product = ProductModel::find($val->product_id)->name;
        }

        return view('admin.order.index',compact('titlePage','page_menu','page_sub','listData'));
    }

    public function statusOrder($order_id, $status)
    {
        try {
                $order = OrderModel::find($order_id);
                if ($order) {
                    $order->status = $status;
                    $order->save();
                    return \redirect()->route('admin.order')->with(['success' => 'Xét trạng thái đơn hàng thành công']);
                }

        } catch (\Exception $exception) {
            dd($exception);
        }
    }
}
