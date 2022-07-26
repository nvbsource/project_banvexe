<?php

use Carbon\Carbon;
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
        Schema::create('pause_seats', function (Blueprint $table) {
            $table->id();
            $table->timestamp("pauseTime");
            $table->unsignedBigInteger("account_id");
            $table->unsignedBigInteger("trip_id");
            $table->foreign("account_id")->references("id")->on("accounts");
            $table->foreign("trip_id")->references("id")->on("trips");
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
        Schema::dropIfExists('pause_seats');
    }
};