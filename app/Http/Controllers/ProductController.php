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
        return view('product-details', ['name' => $id]);
    }
    
}