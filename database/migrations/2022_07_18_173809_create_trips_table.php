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
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->timestamp("start_date");
            $table->timestamp("end_date");
            $table->string("price");
            $table->enum("status", ["pending", "active", "runing", "completed"])->default("pending");
            $table->unsignedBigInteger("route_id");
            $table->unsignedBigInteger("vehicle_id");
            $table->unsignedBigInteger("passenger_car_company_id");
            $table->foreign("vehicle_id")->references("id")->on("vehicles");
            $table->foreign("route_id")->references("id")->on("routes");
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
        Schema::dropIfExists('trips');
    }
};