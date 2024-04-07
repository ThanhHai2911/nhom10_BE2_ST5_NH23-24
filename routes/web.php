<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/{page?}',[HomeController::class,'index']);
Route::get('/single-product/{product}',[HomeController::class,'product'])->name('single.product');
