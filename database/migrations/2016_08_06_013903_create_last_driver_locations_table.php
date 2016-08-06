<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLastDriverLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('last_driver_location', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_id')->nullable();
            $table->string('driver_id')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
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
        Schema::drop('last_driver_location');
    }
}
