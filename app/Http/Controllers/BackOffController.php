<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class BackOffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('pages/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required', 'max:255',
            'image' => 'required', 'max:255',
            'description' => 'required', 'max:255',
            'price' =>'required|integer',
            'category_id' => 'required',
        ]);

       Product::create($validatedData);

        return redirect('/backoffice')->with('success', 'Produit créé avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();//pluck('name', 'id');
        return view('pages/edit', compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'required',
            'description' => 'required|max:255',
            'price' =>'required|integer',
            'category_id' => 'required',
        ]);
        //dd(Product::findOrFail($id));
        Product::findOrFail($id)->update($validatedData);

        return redirect('/backoffice')->with('success', 'Produit mis à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return redirect('/backoffice')->with('success', 'Produit supprimé avec succèss');
    }

    // public function home()
    // {
    //     return view('pages/homeBackOff');
    // }
}