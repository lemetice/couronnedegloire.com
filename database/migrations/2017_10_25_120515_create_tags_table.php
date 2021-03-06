<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->timestamps();
		});

		// Create pivot table that connects article and tag
		Schema::create('article_tag', function(Blueprint $table)
		{
			
			$table->integer('article_id')->unsigned()->index();
			$table->foreign('article_id')->reference('id')->on('articles')->onDelete('cascade');

			$table->integer('tag_id')->unsigned()->index(); 			
			$table->foreign('tag_id')->reference('id')->on('tags')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tags');

		Schema::drop('article_tag');
	}

}
