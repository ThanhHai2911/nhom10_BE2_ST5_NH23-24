<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartLastController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentControlle;
use App\Http\Controllers\ProductController;
use App\Models\Categori;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AuthorityController;
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
Route::get('/{page?}',[HomeController::class,'index'])->name('index');

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



Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
   



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


//Category ADMIN
    Route::controller(CategoryController::class)->prefix('products/category')->group(function () {
        Route::get('', 'index')->name('products_category');
        Route::get('create', 'create')->name('category.create');
        Route::post('store', 'store')->name('category.store');
        Route::get('show/{id}', 'show')->name('category.show');
        Route::get('edit/{id}', 'edit')->name('category.edit');
        Route::put('edit/{id}', 'update')->name('category.update');
        Route::delete('destroy/{id}', 'destroy')->name('category.destroy');
        Route::get('/profile_admin',[App\Http\Controllers\AuthController::class,'profile'])->name('profile');
    });

    //Uy quyen
    Route::controller(AuthorityController::class)->prefix('products/authority')->group(function () {
        Route::get('', 'index')->name('products_author');
        Route::get('/{id}','author')->name('author');
        Route::put('/{id}', 'update')->name('author.update');
        Route::delete('destroy/{id}', 'destroy')->name('author.destroy');
    });

});
Route::get('/profile_admin',[App\Http\Controllers\AuthController::class,'profile'])->name('profile');
Route::get('products/profile_admin',[App\Http\Controllers\AuthController::class,'profile'])->name('profile');
Route::put('/profile_admin/{id}', [App\Http\Controllers\AuthController::class, 'update'])->name('update_profile');

























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


