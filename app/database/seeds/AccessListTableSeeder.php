<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AccessListTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

			AccessList::create([
				'name' => 'create_product',
				'description' => 'The following user can create product'
			]);

			AccessList::create([
				'name' => 'edit_product',
				'description' => 'The following user can edit product'
			]);

			AccessList::create([
				'name' => 'delete_product',
				'description' => 'The following user can delete product'
			]);

			AccessList::create([
				'name' => 'create_contact',
				'description' => 'The following user can create contact'
			]);

	}
}
