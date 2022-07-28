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
        $this->down();
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('licensePlates');
            $table->integer('countSeat');
            $table->integer('countFloor');
            $table->integer('numColumn');
            $table->integer('numRow');
            $table->unsignedBigInteger('rangeOfVehicle_id');
            $table->unsignedBigInteger('passenger_car_company_id');
            $table->foreign("rangeOfVehicle_id")->references("id")->on("range_of_vehicles");
            $table->foreign("passenger_car_company_id")->references("id")->on("passenger_car_companies");
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
        Schema::dropIfExists('vehicles');
    }
};