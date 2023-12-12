<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gointo;
use App\Http\Controllers\UserController;

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

Route::get('/', [Gointo::class, 'index'])->name('main')->middleware('auth');
Route::get('/product', [Gointo::class, 'product'])->name('product')->middleware('auth');
Route::get('/ship', [Gointo::class, 'ship'])->name('ship')->middleware('auth');
Route::get('/product1', [Gointo::class, 'product1'])->name('product1')->middleware('auth');

// routes/web.php
Route::post('/checkout', [Gointo::class, 'checkout'])->name('checkout');

#Login
Route::get("login", [UserController::class, 'login'])->name('login');
Route::post("/do-login", [UserController::class, 'doLogin'])->name('doLogin');
Route::post("/do-logout", [UserController::class, 'doLogout'])->name('doLogout');


#Register
Route::get("register", [UserController::class, 'register'])->name('register');
Route::post("register", [UserController::class, 'store'])->name('store');
// Route::get("/sample", [UserController::class, 'createSample'])->name('sample');

Route::get('/carts', [Gointo::class, 'carts'])->name('carts')->middleware('auth');
Route::post('/carts/{id}', [Gointo::class, 'addProduct'])->name('addproduct.to.carts')->middleware('auth');
Route::delete('/delete-carts-product', [Gointo::class, 'destroy'])->name('delete.carts.product');