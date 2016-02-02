<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('add_product', 'ProductController@showData');
Route::post('view_product_details', 'ProductController@viewProductDetails');

//Route for handling Categories
Route::resource('categories', 'CategoryController');

Route::resource('suppliers', 'SupplierController');
