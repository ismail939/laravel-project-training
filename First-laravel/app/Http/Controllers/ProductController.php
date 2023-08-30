<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use File;

class ProductController extends Controller
{
    function index()
    {
        // plural => table model=> singular
        $products = Product::get();
        // dump  dd=> dump and die
        // dd($products);
        return view('product.index', ['products' => $products]);
    }

    function show($product_id)
    {
        // plural => table model=> singular
        $product = Product::firstWhere('id', $product_id);
        // dump  dd=> dump and die
        // dd($products);
        return view('product.show', ['product' => $product]);
    }


    function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        // dd($product);
        $oldImageName=$product->product_picture;
        $oldImagePath=public_path('images/').$oldImageName;
        // echo $oldImagePath;
        if(File::exists($oldImagePath)){
        File::delete($oldImagePath);
        }
        return redirect()->route('product.index');

    }
    function update($id)
    {
        $product = Product::find($id);
        return view('product.update', compact('product'));

    }
    function edit($id, Request $request)
    {
        $product = Product::find($id);

        if($request->product_picture!==null){
            $request->validate([
                'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $imageName = time() . '.' . $request->product_picture->extension();

            $oldImageName=$product->product_picture;
            $oldImagePath=public_path('images/').$oldImageName;
            // echo $oldImagePath;
            if(File::exists($oldImagePath)){
            // echo "deleted";
            File::delete($oldImagePath);
            }
            $request->product_picture->move(public_path('images'), $imageName);

            $product->update($request->except('_method', '_token'));
            $product->update([
                'picture'=>$imageName,
            ]);
        }
        else{
            $product->update($request->except('_method', '_token'));
        }
        return redirect()->route('product.index');
    }
    function create(Request $request)
    {
        // dd($request->image);
        return view('product.create');

    }
    function store(Request $request)
    {

        $request->validate([
            'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . $request->product_picture->extension();


        $request->product_picture->move(public_path('images'), $imageName);

        $product=Product::create($request->all());
        $product->update([
            'picture'=>$imageName,
        ]);
        return redirect()->route('product.index');

    }
}
