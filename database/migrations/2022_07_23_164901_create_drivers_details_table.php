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
        Schema::create('drivers_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("trip_id");
            $table->unsignedBigInteger("driver_id");
            $table->foreign("trip_id")->references("id")->on("trips");
            $table->foreign("driver_id")->references("id")->on("drivers");
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
        Schema::dropIfExists('drivers_details');
    }
};