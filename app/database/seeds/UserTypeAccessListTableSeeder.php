<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTypeAccessListTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

			UserTypeAccessList::create([
				'user_type_id' => 1,
				'access_list_id' => 1
		]);
			UserTypeAccessList::create([
				'user_type_id' => 1,
				'access_list_id' => 2
			]);
			UserTypeAccessList::create([
				'user_type_id' => 1,
				'access_list_id' => 3
			]);
			UserTypeAccessList::create([
				'user_type_id' => 2,
				'access_list_id' => 4
			]);

	}

}
