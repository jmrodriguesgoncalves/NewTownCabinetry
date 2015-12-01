<?php

class ProductController extends Controller {

	public function showData() {

		$categories = Categories::lists('name', 'id');
		$suppliers  = Suppliers::lists('name', 'id');

		//$try1 = DB::table('suppliers')->select('name', 'id as supplier_id')->get();
		//$try1 = DB::table('suppliers')->select('name', 'id AS supplier_id')->get();
		return View::make('add_product', array('categories' => $categories, 'suppliers' => $suppliers));
	}
}