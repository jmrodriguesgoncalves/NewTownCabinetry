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

Route::get('/', function () {
		return View::make('hello');
	});

Route::get('add_product', 'ProductController@showData');

Route::post('show_product', function () {
		$supplier = new Suppliers;
		$supplier = Input::get('suppliers_id');
		$category = new Categories;
		$category = Request::input('categories_id');

		return View::make('show_product')->with('supplier', $supplier)->with('category', $category);
	});