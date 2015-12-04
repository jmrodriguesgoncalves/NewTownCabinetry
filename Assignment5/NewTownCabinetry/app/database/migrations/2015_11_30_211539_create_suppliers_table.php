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
				$newSupplier->string('name');
				$newSupplier->string('phone');
				$newSupplier->string('email');

				$newSupplier->integer('addressId')->unsigned()->onDelete('cascade');
				$newSupplier->foreign('addressId')->references('id')->on('addresses');

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
