<?php

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

Route::get('/', 'FrontController@index')->name('front');
Route::get('/proizvodi', 'FrontController@proizvodi')->name('proizvodi');
Route::get('/proizvod', 'FrontController@proizvod')->name('proizvod');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/o_nama', 'FrontController@oNama')->name('oNama');

Route::resource('address', 'AddressController');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/', function () {
        return view('admin.index');
    }
)->name('admin.index');

Route::resource('product', 'ProductsController');
Route::resource('category', 'CategoriesController');


});


Route::get('/home', 'HomeController@index');
Route::resource('/cart', 'CartController');
Route::get('/cart/add-items/{id}', 'CartController@addItem')->name('cart.addItem');

Route::group(['middleware' => 'auth'], function () {
    Route::get('shipping-info','CheckoutController@shipping')->name('checkout.shipping');
});

//Route::get('/checkout', 'CheckoutController@step1');
//Route::get('/shipping-info', 'CheckoutController@shipping')->name('checkout.shipping');
Route::get('/payment', 'CheckoutController@payment')->name('checkout.payment');
Route::post('/store-payment', 'CheckoutController@storePayment')->name('payment.store');

Auth::routes();
