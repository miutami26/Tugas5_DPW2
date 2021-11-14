<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('template', function () {
    return view('template.base');
});
Route::get('/beranda',[HomeController::class,'showberanda']);
Route::get('/katagori',[HomeController::class,'showkatagori']);
Route::get('test/{produk}/{hargamin?}/{hargamax?}',[HomeController::class,'test']);


    Route::get('/{produk}/edit',[ProdukController::class,'edit']);
    Route::resource('produk',ProdukController::class);
    Route::resource('user',UserController::class);
    Route::get('/{user}/edit1',[UserController::class,'edit']); 

    

Route::get('login',[AuthController::class,'showlogin'])->name('login');
Route::post('login',[AuthController::class,'loginProcess']);
Route::get('logout',[AuthController::class,'showlogout']);
