<?php

namespace App\Http\Controllers;

use App\Models\ProductGniew;
use Illuminate\Http\Request;

class ProductGniewController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsgniew = ProductGniew::latest()->paginate(50);

        return view('products.index',compact('productsgniew'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_path' => 'required',
        ]);

        $productgniew = new ProductGniew($request->all());
        $productgniew->image_path = $request->file('image_path')->store('public/products');
        $productgniew->save();

        return redirect()->route('products.index')
            ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductGniew  $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProductGniew $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductGniew  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductGniew $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductGniew  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductGniew $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_path' => 'required',
        ]);

        $image_path = $request->hidden_image_path;
        $product = ProductGniew::find($request->hidden_id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_path = $request->file('image_path')->store('public/products');
        $product->save();
        return redirect()->route('products.index')
            ->with('success','Product updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductGniew  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductGniew $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success','Product deleted successfully');
    }
}
