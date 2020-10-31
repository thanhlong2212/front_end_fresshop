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

Route::get('/trangchu', function () {
    return view('home');
});
// Route::resource('/trangchu', 'HomeController@index');
// Route::resource('/contacus', 'HomeController@contactus');
Route::get('/contacus', function () {
    return view('Contacus.contacus');
});
Route::get('/gallery', function () {
    return view('Gallery.gallery');
});

Route::get('/about_us', function () {
    return view('About_us.aboutus');
});
// menu cap 1 
Route::get('/sidebar_shop', function () {
    return view('Sidebar_shop.sidebar_shop');
});
Route::get('/shop_detail', function () {
    return view('Shop_detail.shop_detail');
});
Route::get('/cart', function () {
    return view('Cart.cart');
});
Route::get('/checkout', function () {
    return view('Checkout.checkout');
});
Route::get('/my_account', function () {
    return view('My_account.my_account');
});
Route::get('/wishlist', function () {
    return view('Wishlist.wishlist');
});