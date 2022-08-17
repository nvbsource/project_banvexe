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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('code')->nullable();
            $table->timestamp('time_expiry')->nullable();
            $table->string('email')->unique()->nullable();
            $table->date('birthday')->nullable();
            $table->string('idCard')->nullable();
            $table->boolean('activePhone')->default(false);
            $table->boolean('activeEmail')->default(false);
            $table->boolean('isBlocked')->default(false);
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
        Schema::dropIfExists('customers');
    }
};