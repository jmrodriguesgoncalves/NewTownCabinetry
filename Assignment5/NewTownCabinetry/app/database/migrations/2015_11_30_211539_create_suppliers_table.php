<?php

use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('suppliers', function ($newSupplier) {
				
				$newSupplier->increments('id');
				$newSupplier->string('supplierCode');
				$newSupplier->string('name');
				$newSupplier->string('phone');
				$newSupplier->string('email');
				$newSupplier->string('address');
				$newSupplier->string('province');
				$newSupplier->string('country');

				$newSupplier->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('suppliers');
	}

}
