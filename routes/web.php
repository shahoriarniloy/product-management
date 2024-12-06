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
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
