<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\categoryProduct;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
//xu ly login xem user va pass
Route::post('/login',[AdminController::class,'check_login']);
//xu y logout
Route::get('/logout',[AdminController::class,'logout']);
//xu ly register
Route::get('/register',[AdminController::class,'register']);
Route::post('/add_register',[AdminController::class,'addRegister']);
//category product
Route::get('/add_category',[categoryProduct::class,'add_category_product']);
Route::post('/save_category',[categoryProduct::class,'save_category']);
