<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submitOrder(Request $request)
    {
        $validatedData = $request->validate([
            'customer-gender' => 'required|in:1,2',
            'customer-name' => 'required|string|max:255',
            'customer-phone' => 'required|string|max:15',
            'customer-email' => 'nullable|email|max:255',
            'customer-address' => 'nullable|string|max:255',
            'order-note' => 'nullable|string|max:255',
        ]);

        $order = new OrderModel();
        $order->name = $validatedData['customer-name'];
        $order->product_id = $request->product_id;
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
        $validatedData = $request->validate([
            'customer-gender' => 'required|in:1,2',
            'customer-name' => 'required|string|max:255',
            'customer-phone' => 'required|string|max:15',
        ]);
        $cartItemsJson = $request->input('dataProduct');
        $cartItems = json_decode($cartItemsJson, true);
        if (is_array($cartItems)){
            foreach ($cartItems as $cartItem) {
                $order = new OrderModel();
                $order->name = $validatedData['customer-name'];
                $order->product_id = $cartItem['id'];
                $order->quantity = $cartItem['quantity'];
                $order->vocative = $validatedData['customer-gender'];
                $order->phone = $validatedData['customer-phone'];
                $order->email = $request->get('customer-email');
                $order->address = $request->get('customer-address');
                $order->note = $request->get('order-note');
                $order->save();
            }
            toastr()->success('Đơn hàng của bạn đã được đặt thành công!');
            return redirect()->route('home')->withCookie(cookie()->forget('cartItems'));
        }else{
            toastr()->error('Vui lòng thêm sản phẩm để tiếp tục');
            return redirect()->route('home');
        }

    }
}
