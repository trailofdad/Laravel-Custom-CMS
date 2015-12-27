<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentAreasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('content_areas', function(Blueprint $table)
		{
            $table->increments('id');
            $table->timestamps('created_at');
            $table->text('description');
            $table->string('name');
            $table->string('alias');
            $table->integer('created_by');
            $table->integer('modified_by');
            $table->rememberToken();

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
		Schema::drop('content_areas');
	}

}
