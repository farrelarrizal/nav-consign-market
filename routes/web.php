<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

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



Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product/process', [ProductController::class, 'process']);

// Cart
Route::get('/cart', [TransactionController::class, 'cart']);
Route::post('/cart/process', [TransactionController::class, 'process']);

// Checkout
Route::get('/checkout', [TransactionController::class, 'checkout']);

// Order
Route::post('/order/add', [TransactionController::class, 'addOrder']);
Route::get('/order', [TransactionController::class, 'showOrder']);
