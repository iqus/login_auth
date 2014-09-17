<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRollPermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roll_permission',function(Blueprint $table){
			$table->integer('r_id')->unsigned();
			$table->integer('p_id')->unsigned();
			$table->foreign('r_id')
 			->references('roll_id')->on('roles')
      		->onDelete('cascade');

      		$table->foreign('p_id')
 			->references('per_id')->on('permission')
      		->onDelete('cascade');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('roll_permission');
	}

}
