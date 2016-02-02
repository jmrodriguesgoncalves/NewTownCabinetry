<?php

class SuppliersTableSeeder extends Seeder {
	public function run() {
		$faker = Faker\Factory::create();

		//Suppliers::truncate();

		$address = Addresses::all()->lists('id');
		for ($i = 0; $i < 20; $i++) {
			$suppliers = Suppliers::create(array(
					'name'      => $faker->company,
					'phone'     => $faker->phoneNumber,
					'email'     => $faker->email,
					'addressId' => $faker->randomElement($address),
				));
		}
	}
}