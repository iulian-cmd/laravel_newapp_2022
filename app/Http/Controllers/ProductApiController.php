<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return response()->json('Product add: success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product $productApi
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        return response()->json(Product::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product $productApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $productApi)
    {
        $productApi->update($request->all());
        return response()->json('Product update: success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product $productApi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $productApi)
    {
        $productApi->delete();
    }
}
