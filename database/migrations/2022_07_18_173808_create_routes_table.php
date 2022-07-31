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
            $table->unsignedBigInteger('departure_district_id');
            $table->unsignedBigInteger('destination_district_id');
            $table->string('departure_name');
            $table->string('destination_name');
            $table->string('departure_address');
            $table->string('destination_address');
            $table->string('departure_location')->comment("longlitude, latitude")->nullable();
            $table->string('destination_location')->comment("longlitude, latitude")->nullable();
            $table->unsignedBigInteger('passenger_car_company_id');
            $table->foreign("departure_district_id")->references("id")->on("districts");
            $table->foreign("destination_district_id")->references("id")->on("districts");
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
        Schema::dropIfExists('routes');
    }
};