<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactDriverLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fact_driver_location', function (Blueprint $table) {
            $table->increments('id');
              $table->string('card_id')->nullable();
            $table->string('driver_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('plat_license')->nullable();
            $table->string('container_number')->nullable();
            $table->string('insurance')->nullable();
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
        Schema::drop('fact_driver_location');
    }
}
