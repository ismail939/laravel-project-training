<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $products = Product::get();
        return response()->json(['data' => $products]);
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20|min:3',
            'price' => 'required',
            'availability' => 'required',
            'category_id' => 'required|exists:categories,id'
        ]);
        try {

            $product = Product::create($request->all());
            return response()->json(['data' => $product]);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'server is not available', 'status'=>503]);
        }

    }

    function show($id){
        $product=Product::find($id);
        if($product){
        return response()->json(['data'=>$product]);
        }
        else{
            return response()->json(['message'=>'Product not found']);
        }
    }

    function destroy($id){
        $product=Product::find($id);
        if($product){
            $product->delete();
            return response()->json(['data'=>$product]);
        }
        return response()->json(['message'=>'Product not found']);
    }


    function edit($id, Request $request){
        $product=Product::find($id);
        if($product){
            $product->update($request->all());
            return response()->json(['data'=>$product,'message'=>'updated data successfully']);
        }
        return response()->json(['message'=>'Product not found']);
    }
}
