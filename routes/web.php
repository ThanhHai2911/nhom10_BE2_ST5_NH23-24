<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\AdminMiddleware;
Paginator::useBootstrap();
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
 
Route::get('/{page?}',[HomeController::class,'index']);
Route::get('/single-product/{product}',[HomeController::class,'product'])->name('single.product');
Route::get('/latest-product/{latestproducts}',[HomeController::class,'latestproducts'])->name('latest.product');
Route::get('/category-product/{categoryproducts}',[HomeController::class,'categoryproducts'])->name('category');
Route::get('/product-category/{productcategory}',[HomeController::class,'productcategory'])->name('product.category');
Route::get('/topsellers-product/{topselersproducts}',[HomeController::class,'topselersproducts'])->name('topsellers.product');
Route::get('/search-product/{searchproduct}',[HomeController::class,'searchproduct'])->name('timkiem.product');






Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile_admin',[App\Http\Controllers\AuthController::class,'profile'])->name('profile');
    Route::get('/profile_admin',[App\Http\Controllers\AuthController::class,'update'])->name('profile_update');



//CRUD ADMIN
    Route::controller(ProductController::class)->prefix('products')->group(function () {
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });
 
  
});



















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/logo-product/{logoproduct}',[HomeController::class,'logoproduct'])->name('logo.product');
require __DIR__.'/auth.php';







