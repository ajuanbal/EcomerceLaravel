<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/login',"login")->name('login');
Route::view('/registro',"register")->name('registro');
Route::view('/admin',"admin-index")->middleware('auth')->name('privada');


Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/iniciar-sesion',[LoginController::class,'login'])->name('iniciar-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::resource('proveedors', ProveedorController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('products', ProductController::class);

//carrito
Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->middleware('auth')->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->middleware('auth')->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->middleware('auth')->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->middleware('auth')->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->middleware('auth')->name('cart.clear');

