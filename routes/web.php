<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\WelcomeController;


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

// Route::get('/signup',[WelcomeController::class,'signup']);
// Route::get('/exe1/{name}',function ($name){
//     return view($name);
// })->name('exe1');

// Route::get('navbar/{name}',function($name){
//     return view($name,['name'=>$name]);
// })->name('navbar');

// Route::get('admin/{age}',function($age){
//     return "Ban da du tuoi de vao trang web";
// })->middleware('checkage');

// Route::post('/dangnhap',function(){
//     return "Đăng Nhập Thành Công";
// })->middleware('formLogin');

// Route::post('process',[WelcomeController::class,'process_signup']);
// Route::resource('/product',ProductController::class);


Route::get('/{page?}', [WelcomeController::class,'index']);
