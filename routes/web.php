<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PaymentController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/my-tag', [TagController::class, 'index'])->name('my-tag');
Route::post('/my-tag/verify', [TagController::class, 'verify']);

Route::get('/order', [PaymentController::class, 'index'])->name('order');

Route::post('/checkout/create-session', [StripeController::class, 'create'])->name('create-checkout');