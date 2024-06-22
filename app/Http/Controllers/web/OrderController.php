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
}
