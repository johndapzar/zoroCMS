<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id');
			$table->integer('user_id');
			$table->text('title');
			$table->text('body');
			$table->string('highlight');
			$table->string('icon');
			$table->string('download');
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
		Schema::drop('group_posts');
	}

}
