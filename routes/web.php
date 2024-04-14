<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
<<<<<<< HEAD

//Admin
Route::middleware('auth')->group(function  () {
    Route::resource("/admin_product", ProductController::class);
    Route::get('/admin_product',function(){
        return view('admin_product.index');
    });
    Route::get('/admin_product', [ProductController::class, 'store'])->name('admin_product.store');
}); 



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
=======
Route::get('/logo-product/{logoproduct}',[HomeController::class,'logoproduct'])->name('logo.product');
>>>>>>> 41c2c2da6aafebc8fd7b7c6e8eec36076bddd124
