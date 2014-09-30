<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PhotoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			$photo = new Photo();
			$photo->name = $faker->word;
			$imageName = $faker->image(public_path() . '/assets/images', 200, 200, null, false);
			$photo->filename = 'assets/images/'  + $imageName;
			$photo->product()->associate( Product::find(rand(1,10)));
			$photo->save();
			$this->command->info($index);
		}
	}

}
