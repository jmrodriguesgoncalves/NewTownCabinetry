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
		//$supplier = new Suppliers;
		//$supplier = Input::get('suppliers_id');
		//$category = new Categories;
		//$category = Request::input('categories_id');

		$product = new Products;
		$product->name = Input::get('name');
		$product->quantity = Input::get('quantity');
		$product->unitPrice = Input::get('unitPrice');
		$product->details = Input::get('description');
		$product->color = Input::get('color');
		$product->supplierProductId = Input::get('productId');
		$product->supplierId = Input::get('suppliers_id');
		$product->categoryId = Input::get('categories_id');
		$product->save();

		//return View::make('show_product')->with('supplier', $supplier)->with('category', $category);
		return View::make('show_product')->with('product', $product);
	});