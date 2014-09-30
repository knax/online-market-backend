<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTypeTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		UserType::create(['name' => 'Admin']);
		UserType::create(['name' => 'Customer Service']);

	}

}
