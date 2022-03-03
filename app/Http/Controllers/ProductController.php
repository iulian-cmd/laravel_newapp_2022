<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showList()
    {
          // requêtes sql brute -> retourne un tableau
        // $products = DB::select('select * from product');
        // dd($products);



        // fluent query builder -> retourne un objet (collection)
        // $products = DB::table('product')->get(); //retourne toute la table
        // $products2 = DB::table('product')->first(); //retourne que le premier produit
        // dd($products,$products2);
        // return view('product-list', ['products'=>$products]);


        //avec model et Eloquent
        $products = Product::all();
        // dd($products);
        return view('product-list', ['products'=>$products]);

    }

    public function showProduct($id)
    {
        return view('product-details', ['name' => $id]);
    }
    
}