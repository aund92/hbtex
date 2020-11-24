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
    Route::get('/', 'BlogController@index')->name('user.home.index');
    Route::get('/danh-muc', 'HomeController@categories')->name('user.categories.index');

    // login
    Route::get('/user/login', 'LoginController@index')->name('user.login.index');
    Route::post('/user/login', 'LoginController@authenticated')->name('user.login.login');
    Route::get('/user/signup', 'LoginController@signup')->name('user.login.signup');
    Route::get('/user/taikhoan', 'LoginController@taikhoan')->name('user.login.taikhoan')->middleware('verified');


    // taiikhoan
    Route::get('/taikhoan/donhang', 'TaiKhoanController@donhang')->name('user.taikhoan.donhang');
    Route::get('/taikhoan/donhang/{id}', 'TaiKhoanController@show')->name('user.donhang.show');
    // dinh duong
    Route::get('/dinhduong', 'DinhDuongController@index')->name('user.dinhduong.index');
    // policy
    Route::get('/blog', 'BlogController@index')->name('user.blog.index');
    Route::get('/blog/{slug}', 'BlogController@index2')->name('user.blog.index2');
    Route::get('/blog/detail/{slug}', 'BlogController@detail')->name('user.blog.detail');

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
