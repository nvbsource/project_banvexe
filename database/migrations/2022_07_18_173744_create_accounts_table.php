<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('role');
            $table->unsignedBigInteger('ticket_office_id')->nullable();
            $table->unsignedBigInteger('passenger_car_company_id');
            $table->foreign("ticket_office_id")->references('id')->on("ticket_offices");
            $table->foreign("role")->references('role')->on("roles");
            $table->foreign("passenger_car_company_id")->references('id')->on("passenger_car_companies");
            $table->rememberToken();
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