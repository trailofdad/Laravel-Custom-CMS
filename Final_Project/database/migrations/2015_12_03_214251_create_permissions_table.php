<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('permissions', function(Blueprint $table)
        {
            $table->integer('permission_id');
            $table->string('permission_description');
            $table->timestamps();
        });

        Schema::create('permission_user', function(Blueprint $table)
        {
            $table->integer('user_id')->unsigned()->index()->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('permission_id')->unsigned()->index();
            $table->foreign('permission_id')->references('permission_id')->on('permissions')->onDelete('cascade');
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
        Schema::drop('permissions');
        Schema::drop('Permission_User');
    }
}
