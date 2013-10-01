<?php

use Illuminate\Database\Migrations\Migration;

class CreateAffiliates extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('affiliates', function($table)
		{
			$table->increments('id');
		    $table->string('url', 255);
		    $table->string('email', 255)->unique();
		    $table->string('token', 255);
			$table->boolean('is_active')->default('0'); 	  
			$table->timestamp('created_at'); //TIMESTAMP equivalent to the table  
		});		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('affiliates');
	}

}