<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $prod = Product::all();
      return view('product.index', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("product.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,gif,svg|max:2048',
        ]);

        $data = $request -> only(['name', 'description', 'price']);
        if($request -> hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image -> move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        Product::create($data);
         return redirect()->route('product.index')->with('success', 'Product Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
          $request -> validate([
            'name' => 'required',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:png,jpg,gif,svg|max:2048',
        ]);

        $data = $request -> only(['name', 'description', 'price']);
        if($request -> hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $image -> move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $product->update($data);
         return redirect()->route('product.index')->with('success', 'Product Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product Deleted Succesfully!');
    }
}
