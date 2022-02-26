<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('layout');
});

// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/user/{id}/brand/{branchId}', function ($id,$branchId) {
//     return "bài viết số ${id} - chi nhánh ${branchId}";
// })->name('user.show');

// Route::get('/show/{id}', function ($id) {
//     return "show ${id} ";
// })->name('show');

// Route::prefix('backend')->group(function(){
//     Route::get('/user', [UserController::class,'index'])->name('backend.user');
//     Route::get('/user/create', [UserController::class,'create'])->name('backend.user.create');
//     Route::post('/user', [UserController::class,'store'])->name('backend.user.store');
//     Route::put('/user/update', [UserController::class,'update'])->name('backend.user.update');

//     Route::get('/product', [ProductController::class,'index'])->name('backend.product');
//     Route::get('/category',[CategoryController::class,'index'])->name('backend.category');
//     Route::get('/news', [NewsController::class,'index'])->name('backend.news');
// });

Route::resource('user', UserController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('/product', ProductController::class);

Route::resource('/category', CategoryController::class);

