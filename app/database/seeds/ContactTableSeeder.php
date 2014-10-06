<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
/*
Class to seed contact table, only customer service user can be inserted here
 */
class ContactTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			// stuff to get random user that are customer service
			$customerServices = User::where('user_type_id', '=', UserType::where('name', '=', 'Customer Service')->first()->id)->get();
			$user = $customerServices[rand(1,count($customerServices)) - 1];

			Contact::create([
				'type' => 'bbm',
				'value' => $faker->word,
				'user_id' => $user->id
			]);
		}
	}

}
