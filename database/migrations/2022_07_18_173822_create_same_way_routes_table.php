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
        Schema::create('same_way_routes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('longlitude');
            $table->string('latilute');
            $table->unsignedBigInteger('route_id');
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
        Schema::dropIfExists('same_way_routes');
    }
};