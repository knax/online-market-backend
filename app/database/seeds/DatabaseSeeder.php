<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CategoryTableSeeder');
		$this->call('ProductTableSeeder');
		$this->call('PhotoTableSeeder');
		$this->call('AccessListTableSeeder');
		$this->call('UserTypeTableSeeder');
		$this->call('UserTypeAccessListTableSeeder');
		$this->call('UserTableSeeder');
		$this->call('ContactTableSeeder');
	}

}
