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


Route::get('/product-details/{book_id}', 'nobles\ProductdetailsController@productdetails')->name('product-details');
Route::get('/shop', 'nobles\ShopController@shop')->name('shop');
Route::get('/search', 'nobles\ShopController@search')->name('search');

/////////////////////wishlist//////////////////////
Route::group(['middleware'=>'auth'], function()
{
Route::get('/wishlist', 'nobles\WishlistController@userwishlist')->name('wishlist');
Route::get('/addwishlist', 'nobles\WishlistController@wishlist')->name('addwishlist');
Route::post('/deletefav', 'nobles\WishlistController@deletefav')->name('deletefav');
});
//////////////////////////////////
Route::get('/', 'Nobles\IndexController@index')->name('index');
Route::view('/Nobleslogin', 'auth.login')->name('nobleslogin');
Route::view('/Noblesregister', 'auth.register')->name('noblesregister');
// Route::post('/logined', 'Client\LoginController@logined')->name('logined');
//  Route::post('/registered', 'Client\RegisterController@registered')->name('registered');
Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');
////////////////////checkout//////////////////
Route::get('/checkout', 'nobles\CheckoutController@checkout')->name('checkout');
Route::post('/checkoutnobles', 'nobles\CheckoutController@checkoutnobles')->name('checkoutnobles');
///////////////////cart/////////////////////
Route::get('/cart', 'nobles\CartController@cart')->name('cart')->middleware('auth');;
Route::get('/addcart', 'nobles\CartController@addcart')->name('addcart')->middleware('auth');;
Route::post('/deletecart', 'nobles\CartController@deletecart')->name('deletecart');