<?php

use Illuminate\Database\Migrations\Migration;

class CreateAffiliatesCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('affiliates_categories', function($table)
		{
		    $table->unsignedInteger('category_id');
		    $table->foreign('category_id')->references('id')->on('categories');
		    $table->unsignedInteger('affiliate_id');
		    $table->foreign('affiliate_id')->references('id')->on('affiliates');
		    $table->primary('category_id', 'affiliate_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('affiliates_categories');
	}

}