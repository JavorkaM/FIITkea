<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

use App\Http\Controllers\{AdminController,
    CartController,
    OrderController,
    EshopController,
    UserController};
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
Auth::routes();

Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/addToCart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/removeFromCart/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');
Route::get('/updateCart/{id}', [CartController::class, 'updateCart'])->name('updateCart');

Route::post('/saveShippingInfo', [OrderController::class, 'saveShippingInfo'])->name('saveShippingInfo');
Route::post('/saveTransportInfo', [OrderController::class, 'saveTransportInfo'])->name('saveTransportInfo');
Route::get('/conclusion', [OrderController::class, 'conclusion'])->name('conclusion');
//post method only so that credit card info doesn't show in the link
Route::post('/conclusion', [OrderController::class, 'conclusion'])->name('conclusion');
Route::get('/payment', [OrderController::class, 'payment'])->name('payment');
Route::get('/order', [OrderController::class, 'order'])->name('order');

Route::get('/eshop', [EshopController::class, 'eshop'])->name('eshop');
Route::get('/eshop/{category}', [EshopController::class, 'eshop_category'])->name('eshop_category');
Route::get('/index', [EshopController::class, 'featured'])->name('index');
Route::get('/', [EshopController::class, 'featured'])->name('index');
Route::get('/product', [EshopController::class, 'product'])->name('product');

Route::get('/profile/{user}', [UserController::class, 'profile'])->name('profile.show');
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/shipping', [OrderController::class, 'shipping'])->name('shipping');
Route::view('/underconstruction', 'underconstruction')->name('underconstruction');
Route::view('/orderconfirm', 'orderconfirm')->name('orderconfirm');
Route::view('/transport', 'transport')->name('transport');


//Route::view('/admin', 'admin')->name('admin');
Route::resource('admin', AdminController::class);
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
//Route::post('/admin', [AdminController::class, 'store'])->name('admin');
Route::get('/createproduct', [AdminController::class, 'createproduct'])->name('createproduct');

