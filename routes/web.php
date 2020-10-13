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
//
Auth::routes(['verify' => true]);
// User
Route::get('/', function () {
    return redirect()->route('user.home.index');
});
Route::namespace('User')->group(function () {
    // Home
    Route::get('/', 'HomeController@index')->name('user.home.index');
    // Product
    Route::get('/product/{id?}', 'ProductController@index')->name('user.product.index');
    Route::post('/product/review', 'ProductController@review')->name('user.product.review')->middleware('verified');
    Route::get('/product-clear-filter', 'ProductController@clearFilter')->name('user.product.clearFilter');
    Route::get('/product-detail/{id}', 'ProductController@productDetail')->name('user.product.detail');
    Route::get('/product-detail-quick-view/{id}', 'ProductController@productDetailQuickView')->name('user.product.quickview');
    // cart
    Route::get('/cart', 'CartController@index')->name('user.cart.index');
    Route::get('/cart/add', 'CartController@addToCart')->name('user.cart.add');
    Route::post('/cart/update', 'CartController@updateCart')->name('user.cart.update');
    Route::get('/cart/remove', 'CartController@remove')->name('user.cart.remove');
    Route::get('/cart/clear', 'CartController@clear')->name('user.cart.clear');
    Route::get('/cart/dropdown', 'CartController@cartDropDown')->name('user.cart.dropdown');

    // checkout
    Route::get('/checkout', 'CheckoutController@index')->name('user.checkout.index');
    Route::post('/checkout', 'CheckoutController@store')->name('user.checkout.store');
    // login
    Route::get('/user/login', 'LoginController@index')->name('user.login.index');
    Route::post('/user/login', 'LoginController@authenticated')->name('user.login.login');
    Route::get('/user/signup', 'LoginController@signup')->name('user.login.signup');
    Route::get('/user/taikhoan', 'LoginController@taikhoan')->name('user.login.taikhoan')->middleware('verified');
    // wish
    Route::get('/wish', 'WishController@index')->name('user.wish.index')->middleware('verified');
    Route::get('/wish/add', 'WishController@addToWish')->name('user.wish.add')->middleware('verified');
    Route::get('/wish/remove/{id?}', 'WishController@remove')->name('user.wish.remove')->middleware('verified');
    // contact
    Route::get('/contact', 'ContactController@index')->name('user.contact.index');
    Route::post('/contact', 'ContactController@store')->name('user.contact.store');
    // policy
    Route::get('/policy', 'PolicyController@index')->name('user.policy.index');
    Route::get('/policy/baomat', 'PolicyController@baomat')->name('user.policy.baomat');
    Route::get('/policy/doitra', 'PolicyController@doitra')->name('user.policy.doitra');
    Route::get('/policy/thanhtoan', 'PolicyController@thanhtoan')->name('user.policy.thanhtoan');
    // taiikhoan
    Route::get('/taikhoan/donhang', 'TaiKhoanController@donhang')->name('user.taikhoan.donhang');
    Route::get('/taikhoan/donhang/{id}', 'TaiKhoanController@show')->name('user.donhang.show');

    // policy
    Route::get('/blog', 'BlogController@index')->name('user.blog.index');
    Route::get('/blog/{slug}', 'BlogController@index2')->name('user.blog.index2');
    Route::get('/blog/detail/{slug}', 'BlogController@detail')->name('user.blog.detail');

    Route::get('/event', 'EventController@index')->name('user.event.index');
    Route::get('/event/{slug}', 'EventController@detail')->name('user.event.detail');
    Route::get('/gioi-thieu', 'HomeController@about')->name('user.about');
    Route::get('/huong-dan', 'HomeController@guide')->name('user.guide');
});


//Route::get('/contact', 'User\HomeController@contact')->name('home.contact');
//Route::get('/about', 'User\HomeController@about')->name('home.about');
//Route::get('/products', 'User\HomeController@products')->name('home.products');
//Route::get('/products/{id}', 'User\HomeController@productDetail')->name('home.product_detail');
//Route::get('/blogs', 'User\HomeController@blogs')->name('home.blogs');
//Route::get('/checkout', 'User\CartController@checkout')->name('home.checkout');
// cart
//Route::get('/cart', 'User\CartController@index')->name('cart.index');
//Route::post('/add', 'User\CartController@store')->name('cart.store');
//Route::post('/update', 'User\CartController@update')->name('cart.update');
//Route::post('/remove', 'User\CartController@remove')->name('cart.remove');
//Route::post('/clear', 'User\CartController@clear')->name('cart.clear');
