<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
			$table->increments('id');
            $table->integer('user_id')->unsigned();
			$table->timestamps('created_at');
            $table->text('description');
            $table->string('title');
            $table->string('html');
            $table->integer('page');
            $table->integer('area');
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->rememberToken();

//fk
            $table->foreign('page')->references('id')->on('pages');
            $table->foreign('area')->references('id')->on('content_areas');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('modified_by')->references('id')->on('users');
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
