<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


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


Route::get('/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/store', [ProductController::class, 'store'])->name('product.store');
Route::group(['middleware' => 'guest'], function () {
Route::get('/register',[ProductController::class, 'register'])->name('register');
Route::post('/register',[ProductController::class, 'registerPost'])->name('product.register');
Route::get('/login',[ProductController::class, 'login'])->name('login');
Route::post('/login',[ProductController::class,'loginpost'])->name('product.login');
});

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [ProductController::class, 'home']);
Route::delete('/logout', [ProductController::class, 'logout'])->name('logout');
});

Route::get('/checkout', [StripeController::class,'checkout'])->name('checkout');
Route::post('/Session', [StripeController::class,'Session'])->name('Session');
Route::get('/success', [StripeController::class,'sucess'])->name('success');
    
