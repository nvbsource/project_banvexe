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
        Schema::create('accounts_ticket_offices', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->unsignedBigInteger('ticketOffice_id');
            $table->unsignedBigInteger('passenger_car_company_id');
            $table->foreign("ticketOffice_id")->references('id')->on("ticket_offices");
            $table->foreign("passenger_car_company_id")->references('id')->on("passenger_car_companies");
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
        Schema::dropIfExists('accounts_ticket_offices');
    }
};
