<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    public function submitOrder(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer_gender' => 'required|in:1,2',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:10',
            'customer_email' => 'nullable|email|max:255',
            'customer_address' => 'nullable|string|max:255',
            'order_note' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            foreach ($errors->all() as $error) {
                toastr()->error($error);
            }
            return back();
        }

        $validatedData = $validator->validated();

        $order = new OrderModel();
        $order->name = $validatedData['customer-name'];
        $order->product_id = $request->product_id;
        $order->quantity = 1;
        $order->vocative = $validatedData['customer-gender'];
        $order->phone = $validatedData['customer-phone'];
        $order->email = $validatedData['customer-email'];
        $order->address = $validatedData['customer-address'];
        $order->note = $validatedData['order-note'];
        $order->save();

        return redirect()->back()->with('success', 'Đơn hàng của bạn đã được đặt thành công!');
    }

    public function submitOrderProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'customer-gender' => 'required|in:1,2',
            'customer-name' => 'required|string|max:255',
            'customer-phone' => 'required|string|max:10',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors->all() as $error) {
                toastr()->error($error);
            }
            return back();
        }

        $validatedData = $validator->validated();
        $cartItemsJson = $request->input('dataProduct');
        $cartItems = json_decode($cartItemsJson, true);
        if (is_array($cartItems)){
            foreach ($cartItems as $cartItem) {
                $product = ProductModel::find($cartItem['id']);
                if ($product->quantity < $cartItem['quantity']){
                    toastr()->error('Sản phẩm '.$product->name.' vượt quá số lượng trong kho');
                    return redirect()->back();
                }
                $order = new OrderModel();
                $order->name = $validatedData['customer-name'];
                $order->product_id = $cartItem['id'];
                $order->quantity = $cartItem['quantity'];
                if ($cartItem['cost']){
                    $order->price = $cartItem['cost'];
                }elseif ($cartItem['price']){
                    $order->price = $cartItem['price'];
                }
                if ($cartItem['total_money']){
                    $order->total_money = $cartItem['total_money'];
                }
                $order->vocative = $validatedData['customer-gender'];
                $order->phone = $validatedData['customer-phone'];
                $order->email = $request->get('customer-email');
                $order->address = $request->get('customer-address');
                $order->note = $request->get('order-note');
                $order->save();
                $product->quantity =  $product->quantity - $cartItem['quantity'];
                $product->save();
            }
            toastr()->success('Đơn hàng của bạn đã được đặt thành công!');
            return redirect()->route('home')->withCookie(cookie()->forget('cartItems'));
        }else{
            toastr()->error('Vui lòng thêm sản phẩm để tiếp tục');
            return redirect()->route('home');
        }

    }
}
