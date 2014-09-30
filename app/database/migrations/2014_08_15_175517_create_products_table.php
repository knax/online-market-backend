<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50);
			$table->integer('price');
			$table->text('description');
			$table->integer('stock');
			$table->string('color', 20);
			$table->timestamps();
			$table->integer('category_id')->unsigned();
			$table->foreign('category_id')->references('id')->on('categories')->delete('cascade')->update('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
