<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showList()
    {
        //requêtes sql brute -> retourne un tableau
        // $products = DB::select('select * from product');
        // dd($products);
        //fluent query builder -> retourne un objet (collection)
        // $products = DB::table('product')->get(); //retourne toute la table
        // $products = DB::table('product')->first(); //retourne le premier produit
        // dd($products);


        //avec model
        $products = Product::all();
        dd($products);

    }

    public function showProduct($id)
    {
        return view('product-details', ['name' => $id]);
    }
}