<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function showList()
    {
       
        $products = Product::all();
        return view('product-list', ['products'=>$products]);

    }

    public function showProduct($id)
    {
        $products = Product::find($id);
        return view('product-details', ['products'=>$products]);
    }
    
    public function cartList()
    {
        return view('cart');
    }

    public function addToCart(Request $request)
    {
        Cart::addToCart([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
}