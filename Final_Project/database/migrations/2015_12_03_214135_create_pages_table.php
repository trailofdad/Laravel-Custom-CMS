<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->text('description');
            $table->integer('created_by')->nullable();
            $table->integer('modified_by')->nullable();
            $table->timestamps('created_at');
//fk
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
		Schema::drop('pages');
	}

}