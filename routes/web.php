<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeAdminController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product-info/{id}',[ProductController::class,'productinfo']);
Route::get('/product/search',[ProductController::class,'search']);
Route::get('/product-details/{id}',  [HomeController::class, 'productdetails']);
Route::resource('product',ProductController::class)->names('product');
Route::resource('category',CategoryController::class)->names('category');
Auth::routes();
Route::get('/home',[HomeAdminController::class,'index']);

// Route::resource('user', UserController::class);
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/product', function () {
//     return view('index');
// });
// Route::get('/product/{id}', function ($id) {
//     return view('product-details');
// });

// Route::resource('/category', CategoryController::class);

