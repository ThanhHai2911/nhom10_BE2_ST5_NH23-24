<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartLastController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentControlle;
use App\Http\Controllers\ProductController;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

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
//Trang chu
Route::get('/{page?}',[HomeController::class,'index']);

//Chi Tiet San Pham
Route::get('/single-product/{product}',[HomeController::class,'product'])->name('single.product');

//San pham theo danh muc
Route::get('/category-product/{categoryproducts}',[HomeController::class,'categoryproducts'])->name('category');
Route::get('/product-category/{productcategory}',[HomeController::class,'productcategory'])->name('product.category');
Route::get('/logo-product/{logoproduct}',[HomeController::class,'logoproduct'])->name('logo.product');

//Top khuyen mai
Route::get('/topsellers-product/{topselersproducts}',[HomeController::class,'topselersproducts'])->name('topsellers.product');

//Tim kiem san pham
Route::get('/search-product/{searchproduct}',[HomeController::class,'searchproduct'])->name('timkiem.product');

//Gio Hang
Route::post('/cart/{add}',[CartController::class,'add'])->name('cart.add')->middleware('auth.check');
Route::get('/cart/{listproduct}',[CartController::class,'listproduct'])->name('cart.product');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::get('/cart/remove/{productId}', [CartController::class, 'remove'])->name('cart.remove');

//Thanh Toan
Route::post('/pay/process', [PaymentControlle::class, 'processPayment'])->name('payment.process');
Route::get('/pay/{checkout}', [HomeController::class, 'checkout'])->name('checkout');


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

//Phan quyen
Route::post('/admin_product',function(){
    return view('index');
})->middleware('phanquyen');
