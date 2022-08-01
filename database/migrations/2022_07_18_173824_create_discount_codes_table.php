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
        Schema::create('discount_codes', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->float("price");
            $table->timestamp("start_date");
            $table->timestamp("end_date");
            $table->unsignedBigInteger("order_id")->nullable();
            $table->unsignedBigInteger("passenger_car_company_id");
            $table->foreign("order_id")->references("id")->on("orders");
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
        Schema::dropIfExists('discount_codes');
    }
};
