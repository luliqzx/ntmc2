<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGCMUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gcm_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_id')->nullable();
            $table->string('driver_id')->nullable();
            $table->string('gcm_id')->nullable();
            $table->string('active')->nullable();
            $table->dateTime('created')->nullable();
            $table->dateTime('updated')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gcm_users');
    }
}
