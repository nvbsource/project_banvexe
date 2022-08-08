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
        Schema::create('pause_detail_seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("pause_seat_id");
            $table->unsignedBigInteger("seat_id");
            $table->foreign("pause_seat_id")->references("id")->on("pause_seats");
            $table->foreign("seat_id")->references("id")->on("seats");
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
        Schema::dropIfExists('pause_detail_seats');
    }
};
