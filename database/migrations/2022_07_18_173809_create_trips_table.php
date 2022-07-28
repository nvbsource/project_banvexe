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
            $table->string("start_date");
            $table->string("end_date");
            $table->string("price");
            $table->enum("status", ["pending", "active", "runing", "completed"])->default("pending");
            $table->unsignedBigInteger("route_id");
            $table->unsignedBigInteger("vehicle_id");
            $table->foreign("vehicle_id")->references("id")->on("vehicles");
            $table->foreign("route_id")->references("id")->on("routes");
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