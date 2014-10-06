<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$product = new Product();
			$product->name = $faker->word;
			$product->price = $faker->randomDigitNotNull(9) * 100000;
			$product->description = $faker->paragraph(3);
			$product->stock = $faker->numberBetween(1,20);
			$product->color = $faker->colorName;
			$product->category()->associate(Category::find(rand(1,3)));
			$product->save();
		}
	}

}
