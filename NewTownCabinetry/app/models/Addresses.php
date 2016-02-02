<?php

class Addresses extends Eloquent {
	public function addressSupplier() {
		return $this->hasOne('Suppliers');
	}
}