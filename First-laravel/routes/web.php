<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::view('/products/create','product.create')->name('product.create');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
// Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::put('/products/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/products/store', [ProductController::class, 'store'])->name('product.store');

Route::resource('/category', CategoryController::class);
// Route::resource('/order', OrderController::class);
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
