<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Cart;
use App\Models\Category;
use App\Models\Latestproduct;
use App\Models\Product;

class CartController extends Controller
{

    public function listproduct(Cart $cart,Product $product){
        $product_cart = Product::paginate(5);
        $data_category = Category::paginate(3); 
        return view('cart', compact('cart','product_cart','data_category','product'));
    }

    public function add(Request $request,Cart $cart)
    {
        $product = Product::find($request -> id);
        $quantity = $request->quantity;
        $cart->add($product,$quantity);
        return redirect()->route('cart.product','listproduct');
    }

    public function removeFromCart($productId, Cart $cart)
    {
        $cart->remove($productId);

        return redirect()->route('cart.product', 'listproduct')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }
}



