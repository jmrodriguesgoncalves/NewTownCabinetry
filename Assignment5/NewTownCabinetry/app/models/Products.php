<?php

class Products extends Eloquent {
	public function productSuppliers() {
		return $this->hasOne('Suppliers');
	}

	public function productCategories() {
		return $this->hasOne('Categories');
	}
}