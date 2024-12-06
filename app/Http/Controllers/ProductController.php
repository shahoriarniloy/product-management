<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts(){
        $products = DB::table("products")->get();
        return view('products.index',  ['data'=>$products]);

    }

    public function productDetails(string $id){
        $product=DB::table("products")->where('id',$id)->first();
        return view('products.details', ['product' => $product]);        
    }

    public function createProduct(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
        ]);
    
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        return redirect()->route('view.products.index');
    }
    

}
