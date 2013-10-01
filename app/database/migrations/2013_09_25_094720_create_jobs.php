<?php

use Illuminate\Database\Migrations\Migration;

class CreateJobs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function($table)
		{
		    $table->increments('id');
		    $table->unsignedInteger('category_id');
		    $table->foreign('category_id')->references('id')->on('categories');
		    $table->string('type', 255);
		    $table->string('company', 255);
		    $table->string('logo', 255);
		    $table->string('url', 255);
		    $table->string('position', 255);
		    $table->text('description');
		    $table->text('apply');
		    $table->string('token', 255)->unique();
		    $table->boolean('is_public'); //BOOLEAN equivalent to the table
		    $table->boolean('is_activated'); //BOOLEAN equivalent to the table
		    $table->string('email', 255);
		    $table->timestamp('expires_at'); //TIMESTAMP equivalent to the table
		    $table->timestamp('created_at'); //TIMESTAMP equivalent to the table
		    $table->timestamp('updated_at'); //TIMESTAMP equivalent to the table
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobs');
	}

}