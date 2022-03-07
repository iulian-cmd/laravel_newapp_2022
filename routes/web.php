<?php


namespace App\Http\CartControllers;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackOffController;
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

Route::get('/', [HomeController::class, 'showHome']);
Route::get('home', [HomeController::class, 'showHome']);
Route::get('product', [ProductController::class, 'showList']);
Route::get('product/{id}',[ProductController::class, 'showProduct']);

//Cart
Route::get('cart', [CartController::class, 'showCart'])->name('cart');
Route::get('cart/{id}', [CartController::class, 'showCart2'])->name('cart');
Route::get('add-to-cart', 'CartController@addToCart');
Route::get('add-to-cart/{id}', 'CartController@getAddToCart')->name('addCart');

//backoffice
Route::resource('backoffice', BackOffController::class);
Route::get('backhome', [BackOffController::class, 'home']);