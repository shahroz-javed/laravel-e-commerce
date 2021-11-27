<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;

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


Route::view("/login", "login");

Route::post('/login', [UserController::class, 'login']);
Route::view('/register',  'register');
Route::post('/register', [UserController::class, 'register']);
route::get('/', [ProductController::class, 'index']);
route::get('/detail/{id}', [ProductController::class, 'detail']);
route::get('search', [ProductController::class, 'search']);

route::post('add_to_cart', [ProductController::class, 'addToCart']);
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
route::get('cartlist', [ProductController::class, 'cartList']);
route::get('removecart/{id}', [ProductController::class, 'removeCart']);
route::get('ordernow', [ProductController::class, 'orderNow']);
route::post('orderplace', [ProductController::class, 'orderPlace']);
route::get('myorder', [ProductController::class, 'myOrders']);
