<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gointo;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;


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

Route::get('/', [Gointo::class, 'index'])->name('home')->middleware('auth');
Route::get('/about', [Gointo::class, 'about'])->name('about')->middleware('auth');
Route::get('/contact', [Gointo::class, 'contact'])->name('contact')->middleware('auth');
Route::get('/menu', [Gointo::class, 'menu'])->name('menu')->middleware('auth');
Route::get('/product', [Gointo::class, 'product'])->name('product')->middleware('auth');
Route::get('/ship', [Gointo::class, 'ship'])->name('ship')->middleware('auth');
Route::get('/product1', [Gointo::class, 'product1'])->name('product1')->middleware('auth');

// routes/web.php
Route::get('/checkout', [Gointo::class, 'checkout'])->name('checkout');

#Login
Route::get("login", [UserController::class, 'login'])->name('login');
Route::post("/do-login", [UserController::class, 'doLogin'])->name('doLogin');
Route::post("/do-logout", [UserController::class, 'doLogout'])->name('doLogout');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');


#Register
Route::get("register", [UserController::class, 'register'])->name('register');
Route::post("register", [UserController::class, 'store'])->name('store');
// Route::get("/sample", [UserController::class, 'createSample'])->name('sample');

Route::get('/carts', [Gointo::class, 'carts'])->name('carts')->middleware('auth');
Route::post('/carts/{id}', [Gointo::class, 'addProduct'])->name('addproduct.to.carts')->middleware('auth');
Route::delete('/delete-carts-product', [Gointo::class, 'destroy'])->name('delete.carts.product');

Route::post('/place-order', [Gointo::class, 'placeOrder'])->name('place.order');
Route::post('/add-to-cart/{id}', [GointoController::class, 'addProductToCart'])->name('add.to.cart');
Route::post('/place-order', [CartController::class, 'addToCart'])->name('place.order');
Route::resource('orders', OrderController::class)->only(['index', 'store']);

