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
        Schema::create('evaluates', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("rating")->default(1);
            $table->string("comment")->nullable()->default("No comment");
            $table->unsignedBigInteger("passenger_car_company_id");
            $table->unsignedBigInteger("customer_id");
            $table->foreign("passenger_car_company_id")->references("id")->on("passenger_car_companies");
            $table->foreign("customer_id")->references("id")->on("customers");
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
        Schema::dropIfExists('evaluates');
    }
};