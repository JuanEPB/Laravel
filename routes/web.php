<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('raiz');
Route::get('products', [HomeController::class, 'home2'])->name('raiz');

Route::get('products/list', [ProductsController::class, 'index'])->name('products.index');
Route::get('product/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('products/guardar',[ProductsController::class, 'store'])->name('products.store');
route::get('products/{id}/delete',[ProductsController::class, 'destroy'])->name('products.delete');


Route::post('products/{id}/update', [ProductsController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');



http://127.0.0.1:8000/products/update

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['validar_rol'])->group(function(){
    Route::get('pruebaadmin', function(){
        dd('entra');
    });
});
Route::get('error/403', function(){
    return view('errors.403');
});
