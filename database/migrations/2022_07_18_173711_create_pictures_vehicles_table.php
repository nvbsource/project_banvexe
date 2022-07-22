<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures_vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("path");
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign("vehicle_id")->references('id')->on("vehicles");
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
        Schema::dropIfExists('pictures_vehicles');
    }
};