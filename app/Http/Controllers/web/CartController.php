<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        try {
            $cartItemsJson = $request->cookie('cartItems');
            $cartItems = json_decode($cartItemsJson, true) ?? [];

            $cartDetails = [];
            foreach ($cartItems as $cartItem) {
                $product_id = $cartItem['product_id'];
                $quantity = $cartItem['quantity'];
                $product = ProductModel::find($product_id);

                if (!$product) {
                    return response()->json(['error' => -1, 'message' => "Not found product"], 400);
                }

                $total_money = $product->price_promotional??0*$quantity;

                $cartDetails[] = [
                    'id' => $product->id,
                    'name' => $product->name,
                    'slug'=> $product->slug,
                    'cost' => $product->price??0,
                    'price' => $product->price_promotional??0,
                    'total_money' => $total_money,
                    'thumbnail' => $product->src,
                    'quantity' => $quantity,
                ];
            }
            return response()->json(['error' => 0, 'data' => $cartDetails]);
        } catch (\Exception $e) {
            return response()->json(['error' => -1, 'message' => $e->getMessage()], 400);
        }
    }

    public function addToCart(Request $request)
    {
        try {
            $quantity = $request->quantity ?? 1;
            $product_id = $request->product_id;

            if (!$product_id) {
                return response()->json(['error' => -1, 'message' => "Product id is null"], 400);
            }

            $product = ProductModel::find($product_id);

            if (!$product) {
                return response()->json(['error' => -1, 'message' => "Not found product"], 400);
            }

            $cartItems = $request->cookie('cartItems');
            $cartItems = json_decode($cartItems, true);

            $found = false;

            if ($cartItems && is_array($cartItems)) {
                foreach ($cartItems as $key => &$cartItem) {
                    if ($cartItem['product_id'] == $product_id) {
                        $cartItem['quantity'] += $quantity;
                        $found = true;
                        break;
                    }
                }
            }

            if (!$found) {
                $cartItems[] = [
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                ];
            }

            $cartItemsJson = json_encode($cartItems);

            return response()->json(['error' => 0, 'message' => "Thêm sản phẩm vào giỏ hàng thành công"])->cookie('cartItems', $cartItemsJson);
        } catch (\Exception $e) {
            return response()->json(['error' => -1, 'message' => $e->getMessage()], 400);
        }
    }

    public function updateCartQuantity(Request $request)
    {
        try {
            $cartItems = $request->cookie('cartItems');
            $cartItems = json_decode($cartItems, true);

            $product_id = $request->product_id;
            $quantity = $request->quantity;

            if (!$product_id || !$quantity || $quantity <= 0) {
                return response()->json(['error' => -1, 'message' => "Invalid data"], 400);
            }


            foreach ($cartItems as $key => $item) {
                if ($item['product_id'] == $product_id) {
                    $cartItems[$key]['quantity'] = (int)$quantity;
                }
            }

            $cartItemsJson = json_encode($cartItems);

            return response()->json(['error' => 0, 'message' => "Cập nhật sản phẩm thành công"])->cookie(
                'cartItems',
                $cartItemsJson
            );
        } catch (\Exception $e) {
            return response()->json(['error' => -1, 'message' => $e->getMessage()], 400);
        }
    }

    public function remove(Request $request)
    {
        try {
            $cartItems = $request->cookie('cartItems');
            $cartItems = json_decode($cartItems, true);

            $product_id = $request->product_id;

            foreach ($cartItems as $key => $item) {
                if ($item['product_id'] == $product_id) {
                    unset($cartItems[$key]);

                    $cartItemsJson = json_encode($cartItems);

                    return response()->json(['error' => 0, 'message' => "Xóa sản phẩm thành công"])->cookie('cartItems', $cartItemsJson);
                }
            }

            return response()->json(['error' => 0, 'message' => "Success remove address"]);
        } catch (\Exception $e) {
            return response()->json(['error' => -1, 'message' => $e->getMessage()], 400);
        }
    }
}
