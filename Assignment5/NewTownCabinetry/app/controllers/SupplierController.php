<?php

class SupplierController extends Controller {

	public function index() {

		$suppliers = Suppliers::all();
		return View::make('suppliers.index')
			->with('suppliers', $suppliers);
	}

	/**
	 * Show the form for creating a new supplier.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('suppliers.create');
	}

	/**
	 * Store a newly created supplier in database.
	 *
	 * @return Response
	 */
	public function store() {
		$rules = array(
			'supplierCode'   => 'required',
			'name' => 'required',
			'phone'   => 'required',
			'email' => 'required',
			'address' => 'required',
			'province'   => 'required',
			'country'   => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			$messages = $validator->messages();

			return Redirect::to('suppliers/create')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			$supplier              = new Suppliers;
			$supplier->supplierCode= Input::get('supplierCode');
			$supplier->name        = Input::get('name');
			$supplier->phone       = Input::get('phone');
			$supplier->email       = Input::get('email');
			$supplier->address     = Input::get('address');
			$supplier->province    = Input::get('province');
			$supplier->country     = Input::get('country');
			$supplier->save();
			return Redirect::to('suppliers');
		}
	}

	/**
	 * Show the form for editing the specified supplier.
	 *
	 * @return Response
	 */
	public function edit($id) {
		$supplier = Suppliers::find($id);

		return View::make('suppliers.edit')->with('supplier', $supplier);
	}

	/**
	 * Update the specified supplier in database.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		$rules = array(
			'supplierCode'   => 'required',
			'name' => 'required',
			'phone'   => 'required',
			'email' => 'required',
			'address' => 'required',
			'province'   => 'required',
			'country'   => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			$messages = $validator->messages();

			return Redirect::to('suppliers/'.$id.'/edit')
				->withErrors($validator)
				->withInput(Input::all());
		} else {
			$supplier              = Suppliers::find($id);
			$supplier->supplierCode= Input::get('supplierCode');
			$supplier->name        = Input::get('name');
			$supplier->phone       = Input::get('phone');
			$supplier->email       = Input::get('email');
			$supplier->address     = Input::get('address');
			$supplier->province    = Input::get('province');
			$supplier->country     = Input::get('country');
			$supplier->save();
			return Redirect::to('suppliers');
		}
	}

	/**
	 * Remove the specified categroy from database.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {

		$supplier = Suppliers::find($id);
		$check    = new Suppliers;
		$error    = "You can not delete this supplier because some products depend on it";
		if ($check->exists($id) == true) {

			return Redirect::to('suppliers')->with('error', $error);
		} else {
			$supplier->delete();
		}
		// redirect
		return Redirect::to('suppliers');
	}

	public function show($id) {
		$supplier = Suppliers::find($id);

		return View::make('suppliers.show')->with('supplier', $supplier);
	}
}