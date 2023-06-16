<?php

use App\Http\Controllers\Admincontroller;
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
    return view('login.login');
});
Route::get('/dashboard',[Admincontroller::class,'dashboard']);
//xu ly login kiem tra xem user va pass
Route::post('/login',[Admincontroller::class,'checklogin']);
//xu y logout
Route::get('/logout',[Admincontroller::class,'logout']);
//xu ly register
Route::get('/register',[Admincontroller::class,'register']);
Route::post('/add_register',[Admincontroller::class,'addRegister']);
//category product
Route::get('/add_catelogy',[categoryProduct::class,'add_category_product']);
Route::post('/savecategogy',[categoryProduct::class,'save_categogy']);
