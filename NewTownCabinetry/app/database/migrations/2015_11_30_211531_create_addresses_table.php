<?php

use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('addresses', function ($newAddress) {
				$newAddress->increments('id');
				$newAddress->string('streetName');
				$newAddress->string('postalCode');
				$newAddress->string('province');
				$newAddress->string('city');
				$newAddress->string('country');
				$newAddress->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('addresses');
	}

}
