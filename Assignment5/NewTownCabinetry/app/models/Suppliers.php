<?php

class Suppliers extends Eloquent {
	public function supplierAddress() {
		return $this->hasOne('Addresses');
	}

	public function supplierProducts() {
		return $this->hasMany('Products');
	}
}