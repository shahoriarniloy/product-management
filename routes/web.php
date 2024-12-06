<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class,'showProducts'])->name('view.products.index');
Route::get('/product/{id}', [ProductController::class,'productDetails'])->name('view.products.details');
Route::get('/createProduct', function () {
    return view('products.create');
})->name('view.products.create');
Route::post('/store-product', [ProductController::class, 'createProduct'])->name('storeProduct');



