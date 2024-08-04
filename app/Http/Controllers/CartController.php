<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    // Add to Cart
    public function add(Request $request)
    {
        $data = [
            'user_id' => $request->userId,
            'product_id' => $request->productId,
            'qty' => $request->qty
        ];

        Cart::create($data);
        return response(200);
    }

    // Cart Page
    public function cart()
    {
        $data = Cart::where('carts.user_id', Auth::user()->id)
            ->select('carts.*', 'products.image as product_image', 'products.name as product_name', 'products.price as product_price')
            ->leftJoin('products', 'products.id', 'carts.product_id')
            ->get();
        $subTotal = 0;
        foreach ($data as $cart) {
            $subTotal += $cart->qty * $cart->product_price;
        }

        return view('cart', compact('data', 'subTotal'));
    }

    // Delete Product
    public function deleteProduct(Request $request)
    {
        Cart::where('id', $request->cartId)
            ->where('user_id', Auth::user()->id)
            ->delete();
    }

    // Cart Clear
    public function cartClear(){
        Cart::where('user_id', Auth::user()->id)->delete();
        return redirect()->route('moon.home');
    }
}
