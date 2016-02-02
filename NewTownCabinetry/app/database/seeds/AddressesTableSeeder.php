<?php

class AddressesTableSeeder extends Seeder {
	public function run() {
		$faker = Faker\Factory::create();

		//Addresses::truncate();

		for ($i = 0; $i < 30; $i++) {
			$addresses = Addresses::create(array(
					'streetName'     => $faker->streetName,
					'buildingNumber' => $faker->buildingNumber,
					'postalCode'     => $faker->postcode,
					'province'       => $faker->state,
					'city'           => $faker->city,
					'country'        => $faker->country,

				));
		}
	}
}