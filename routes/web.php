<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

//products controller
Route::get('/skincare', [ProductController::class, 'product']);
Route::get('/lashes', [ProductController::class, 'lashes']);


//Pages Controller
Route::get('/home', [PagesController::class, 'home'])->name('home');
Route::get('/search', [PagesController::class, 'search']);

//orders Controller
Route::get('/orders', [OrderController::class, 'orders'])->name('orders');


//cart
Route::get('cart/{product}', [CartController::class, 'addToCart'])->name('cart.store');
Route::get('shopping-cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('add-cart/{id}', [CartController::class, 'addCart'])->name('cart.add');
Route::get('cart-remove/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
Route::get('cart-clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/checkout/{totalprice}', [CartController::class, 'checkout'])->name('cart.checkout')->middleware('auth');
Route::post('/charge', [CartController::class, 'charge'])->name('checkout.charge');

//Admin Controller
Route::get('/admin-orders', [AdminController::class, 'admin'])->name('admin.orders');
Route::post('/adminstore/{id}', [AdminController::class, 'adminstore'])->name('admin.store');


//log Controller
Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('/reset-password', [LogoutController::class, 'resetpassword']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
