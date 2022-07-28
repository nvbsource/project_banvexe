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
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departure_province_id');
            $table->unsignedBigInteger('destination_province_id');
            $table->string('departure_name');
            $table->string('destination_name');
            $table->string('departure_longlitude');
            $table->string('departure_latitude');
            $table->string('destination_longlitude');
            $table->string('destination_latitude');
            $table->unsignedBigInteger('passengerCarCompany_id');
            $table->foreign("departure_province_id")->references("id")->on("provinces");
            $table->foreign("destination_province_id")->references("id")->on("provinces");
            $table->foreign("passengerCarCompany_id")->references("id")->on("passenger_car_companies");
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
        Schema::dropIfExists('routes');
    }
};