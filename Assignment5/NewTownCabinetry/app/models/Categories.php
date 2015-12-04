<?php

class Categories extends Eloquent {

	public function categoryProducts() {
		return $this->hasMany('Products');
	}
}