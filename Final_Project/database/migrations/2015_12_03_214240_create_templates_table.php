<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Templates', function(Blueprint $table)
		{
			$table->increments('id');
            $table->timestamps('created_at');
            $table->text('description');
            $table->string('name')->unique();
            $table->string('active');
            $table->string('css');
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
		Schema::drop('Templates');
	}

}
