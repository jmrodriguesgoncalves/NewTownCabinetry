<?php

class ProductController extends Controller {

	public function showData() {

		$categories = Categories::lists('name', 'id');
		$suppliers  = Suppliers::lists('name', 'id');

		//$try1 = DB::table('suppliers')->select('name', 'id as supplier_id')->get();
		//$try1 = DB::table('suppliers')->select('name', 'id AS supplier_id')->get();
		return View::make('add_product', array('categories' => $categories, 'suppliers' => $suppliers));
	}

	public function viewProductDetails() {
		$rules = array(
			'name'              => 'required',
			'quantity'          => 'required|integer',
			'unitPrice'         => 'required|numeric',
			'color'             => 'required|alpha',
			'supplierProductId' => 'required|unique:products|integer',
			'suppliers_id'      => 'required',
			'categories_id'     => 'required',

		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			$messages = $validator->messages();

			return Redirect::to('add_product')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			$product                    = new Products;
			$product->name              = Input::get('name');
			$product->quantity          = Input::get('quantity');
			$product->unitPrice         = Input::get('unitPrice');
			$product->details           = Input::get('description');
			$product->color             = Input::get('color');
			$product->supplierProductId = Input::get('supplierProductId');
			$product->supplierId        = Input::get('suppliers_id');
			$product->categoryId        = Input::get('categories_id');
			$product->save();
			//return View::make('show_product')->with('supplier', $supplier);
			//->with('category', $product);
			return View::make('view_product_details')->with('product', $product);
		}
	}

}