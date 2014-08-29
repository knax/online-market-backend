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
			$table->string('name');
			$table->integer('price');
			$table->text('description');
			$table->string('stock');
			$table->string('color');
			$table->integer('catagory_id')->unsigned();
			$table->timestamps();
			$table->foreign('catagory_id')->references('id')->on('catagories')->delete('cascade')->update('cascade');
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
