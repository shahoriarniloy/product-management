<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts(Request $request)
{
    $search = $request->input('search');
    $perPage = 2;

    if ($search) {
        $products = DB::table('products')
            ->where('name', 'like', "%{$search}%")
            ->orWhere('description', 'like', "%{$search}%")
            ->paginate($perPage);
    } else {
        $products = DB::table('products')->paginate($perPage);
    }

    return view('products.index', ['data' => $products]);
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


    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('view.products.index');
    }

    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|integer|min:0',
        'description' => 'required|string',
    ]);

    DB::table('products')
        ->where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'description' => $request->input('description'),
            'updated_at' => now(), 
        ]);

    return redirect()->route('view.products.index');
}



    

}
