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
        Schema::create('assistant_drivers_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("trip_id");
            $table->unsignedBigInteger("assitantDriver_id");
            $table->foreign("trip_id")->references("id")->on("trips");
            $table->foreign("assitantDriver_id")->references("id")->on("assistant_drivers");
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
        Schema::dropIfExists('assistant_drivers_details');
    }
};