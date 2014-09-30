<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			User::create([
				'email' => $faker->email,
				'password' => Hash::make('standar'),
				'user_type_id' => rand(1,2)
			]);
		}
	}

}
