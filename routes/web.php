<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductController;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
Route::view("/login","login");
Route::post('/login', [UsersController::class,'login']);
Route::get('/products', [ProductController::class,'index']);
Route::get('/details/{id}', [ProductController::class,'details']);
Route::get('/search', [ProductController::class,'search']);
Route::post('/add_to_cart', [ProductController::class,'cart']);
Route::get('/cartList', [ProductController::class,'cartList']);
Route::get('/removeProduct/{id}', [ProductController::class,'removeProductFromCart']);
Route::get('/orderNow', [ProductController::class,'orderNow']);
Route::post('/orderplace', [ProductController::class,'orderPlace']);
Route::get('/myOrder', [ProductController::class,'myOrder']);
