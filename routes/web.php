<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController ;
use App\Http\Controllers\ProductController ;
use App\Http\Controllers\SellerController ;
use App\Http\Controllers\UserController ;



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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage'])->name('homePage');
Route::get('cart/{id}', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('save-cart',[App\Http\Controllers\CartController::class, 'checkout'])->name('save-cart');





Auth::routes();
Route::middleware(['auth','isAdmin'])->group(function() {
    Route::get('\home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
    Route::get('list-customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('list-customer');
    Route::get('list-product',[App\Http\Controllers\ProductController::class, 'index'])->name('list-product');
    Route::get('list-seller', [App\Http\Controllers\SellerController::class, 'index'])->name('list-seller');
});




Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers');
Route::get('/create-customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('create-customer');  // register a new customer information
Route::post('save_customer',[App\Http\Controllers\CustomerController::class, 'store'])->name('save-customer'); 
Route::get('edit-customer/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit-customer');
  //view tha customer list
Route::delete('destroy-customer/{id}',  [App\Http\Controllers\CustomerController::class, 'destroy'])->name('destroy-customer');
Route::put('update-customer/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('update-customer');


// Route::get('/image-product',[App\Http\Controllers\ProductController::class, 'run'])->name('image-product');
Route::get('/create-product',[App\Http\Controllers\ProductController::class, 'create'])->name('create-product');
Route::post('/save-product',[App\Http\Controllers\ProductController::class, 'store'])->name('save-product');
Route::get('edit-product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit-product');
Route::delete('destroy-product/{id}',  [App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy-product');

Route::put('update-product/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('update-product');
Route::get('/show-product',[App\Http\Controllers\ProductController::class, 'show'])->name('show-product');

Route::get('/create-seller',[App\Http\Controllers\SellerController::class, 'create'])->name('create-seller');
Route::post('save_seller',[App\Http\Controllers\SellerController::class, 'store'])->name('save-seller');

Route::get('edit-seller/{id}', [App\Http\Controllers\SellerController::class, 'edit'])->name('edit-seller');
Route::put('update-seller/{id}', [App\Http\Controllers\SellerController::class, 'update'])->name('update-seller');
Route::delete('destroy-seller/{id}',  [App\Http\Controllers\SellerController::class, 'destroy'])->name('destroy-seller');
