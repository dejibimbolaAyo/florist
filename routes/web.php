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

Route::get('admin/register', 'AdminController@getRegistration');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', 'AdminController@index');
    Route::get('orders', 'AdminController@orders');
    Route::get('orders/delete/{order_id}', 'AdminController@rejectOrder');
    Route::get('products', 'AdminController@products');
    Route::get('products/create', 'AdminController@getCreateProduct');
    Route::post('products/create', 'AdminController@createProduct');
    Route::get('products/edit/{product_id}', 'AdminController@getUpdateProduct');
    Route::post('products/edit/{product_id}', 'AdminController@updateProduct');
    Route::get('products/delete/{product_id}', 'AdminController@deleteProduct');
});

Route::get('/', 'HomeController@index');

Route::get('register', 'HomeController@getRegistration');
Route::post('register', 'Auth\RegisterController@postRegistration');

Route::get('login', ['as' => 'login', 'uses' => 'HomeController@getLogin']);
Route::post('login', 'Auth\LoginController@postLogin');

Route::get('logout', 'Auth\LoginController@logout');

Route::post('contact', 'HomeController@postContact');

Route::get('subscribe', 'HomeController@postSubscribe');

// Authenticated user route
Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/products', 'ProductController@index');
    Route::get('/products/place-order/{product_id}', 'OrderController@postOrder');
});
