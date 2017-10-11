<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{	
			$default_media_url="public/images/album-cover.png";
			
			$table->increments('id');
			$table->integer('author_id')->unsigned();
			$table->string('title');
			$table->string('slug')->unique();
			$table->string('type');
			$table->string('media_url')->default($default_media_url);
			$table->text('body');
			$table->string('location')->nullable();
			$table->timestamps();
			$table->timestamp('deleted_at');
			$table->timestamp('published_at');

			$table->foreign('author_id')
				  ->references('id')
				  ->on('users')
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
		Schema::drop('articles');
	}

}
