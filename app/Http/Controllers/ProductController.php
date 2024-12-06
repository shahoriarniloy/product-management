<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showProducts(){
        $products = DB::table("products")->get();
        return view('allProducts',  ['data'=>$products]);

    }

    public function productDetails(string $id){
        $product=DB::table("products")->where('id',$id)->first();
        return view('singleProduct', ['product' => $product]);        
    }
}
