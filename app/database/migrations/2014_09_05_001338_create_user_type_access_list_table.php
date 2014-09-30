<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTypeAccessListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_type_access_list', function(Blueprint $table)
		{
		$table->integer('user_type_id')->unsigned();
		$table->integer('access_list_id')->unsigned();
		$table->foreign('user_type_id')->references('id')->on('user_types')->delete('cascade')->update('cascade');
		$table->foreign('access_list_id')->references('id')->on('access_lists')->delete('cascade')->update('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_type_access_list');
	}

}
