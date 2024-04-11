<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/{page?}',[HomeController::class,'index']);
Route::get('/single-product/{product}',[HomeController::class,'product'])->name('single.product');
Route::get('/latest-product/{latestproducts}',[HomeController::class,'latestproducts'])->name('latest.product');
Route::get('/category-product/{categoryproducts}',[HomeController::class,'categoryproducts'])->name('category');
