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
            $table->unsignedBigInteger("from_district_id");
            $table->unsignedBigInteger("to_district_id");
            $table->string("address_start");
            $table->string("address_end");
            $table->timestamp("start_date");
            $table->enum("status", ["pending", "active", "runing", "completed"])->default("pending");
            $table->integer("price");
            $table->unsignedBigInteger("driver_id");
            $table->unsignedBigInteger("vehicle_id");
            $table->foreign("from_district_id")->references("id")->on("districts");
            $table->foreign("to_district_id")->references("id")->on("districts");
            $table->foreign("driver_id")->references("id")->on("drivers");
            $table->foreign("vehicle_id")->references("id")->on("vehicles");
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