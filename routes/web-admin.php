<?php

use Illuminate\Support\Facades\Route;

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

// admin

Route::middleware(['auth', 'can:isAdmin'])->group(function () {
//    Route::prefix('admin')->group(function () {
    Route::resources(['user' => 'TaiKhoanController']);
    Route::resources(['blog' => 'BlogController']);
    Route::resources(['category' => 'CategoryController']);
    Route::resources(['brand' => 'BrandController']);
    Route::resources(['city' => 'CityController']);
    Route::resources(['dinhduong' => 'DinhDuongController']);
    Route::resources(['district' => 'DistrictController']);
    Route::resources(['ward' => 'WardController']);
    Route::resources(['product' => 'ProductController']);
    Route::resources(['sku' => 'SkuController']);
    Route::resources(['size' => 'SizeController']);
    Route::resources(['country' => 'CountryController']);
    Route::resources(['supplier' => 'SupplierController']);
    Route::resources(['banner' => 'BannerController']);
    Route::resources(['discount' => 'DiscountController']);
    Route::resources(['blog-category' => 'BlogCategoryController']);
    Route::resources(['event' => 'EventController']);
    Route::get('/home', 'HomeController@index')->name('home.admin');
    Route::get('/customer', 'CustomerController@index')->name('customer.index');
    Route::get('/order', 'OrderController@index')->name('order.index');
    Route::post('/order', 'OrderController@changeStatus')->name('order.change-status');
    Route::get('/order/{id}', 'OrderController@show')->name('order.show');
    //
    Route::get('/contact', 'ContactController@index')->name('contact.index');
    // product
    Route::put('/product/set-pin/{productId}', 'ProductController@setPin')->name('product.pin');
    Route::put('/product/set-hot/{productId}', 'ProductController@setHot')->name('product.hot');
    Route::delete('/product/remove/{id}', 'ProductController@remove')->name('product.remove');
//    });
});

Route::get('/', function () {
    return redirect()->route('home.admin');
});
