<?php
namespace App\Http\Controllers;

use App\Models\Cart;
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
    
}