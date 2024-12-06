<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductController::class,'showProducts']);
Route::get('/product/{id}', [ProductController::class,'productDetails'])->name('view.product');