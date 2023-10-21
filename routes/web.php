<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('products/list', [ProductsController::class, 'index'])->name('products.index');
Route::get('product/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('products/guardar',[ProductsController::class, 'store'])->name('products.store');


Route::post('products/{id}/update', [ProductsController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::get('/products/{id}/destroy', [ProductsController::class, 'destroy'])->name('products.destroy');


http://127.0.0.1:8000/products/update
