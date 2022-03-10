<?php


namespace App\Http\Controllers;

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
Route::get('home', [HomeController::class, 'showHome'])->name('home');
Route::get('product', [ProductController::class, 'showList'])->name('product.list');
Route::get('product/{id}',[ProductController::class, 'showProduct'])->name('product.detail/{id}');
Route::get('contact', [ContactController::class, 'showContact'])->name('contact');

//Cart
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

//backoffice
Route::group(['middleware' => ['auth']], function () {

    Route::resource('backoffice', BackOffController::class);
    //Route::get('backhome', [BackOffController::class, 'home']);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';