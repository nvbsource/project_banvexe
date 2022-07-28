<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\TicketOffice;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("paymentMethod", 50);
            $table->boolean("isPayment")->default(false);
            $table->boolean("isTicketReceived")->default(false);
            $table->integer("price");
            $table->unsignedBigInteger("discount_code_id");
            $table->date("ticketPickUpLocation");
            $table->unsignedBigInteger("ticketOffice_id")->nullable();
            $table->unsignedBigInteger("trip_id");
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("seat_id");
            $table->unsignedBigInteger("departure_same_way_route_id")->nullable();
            $table->unsignedBigInteger("destination_same_way_route_id")->nullable();
            $table->foreign('ticketOffice_id')->references('id')->on("ticket_offices");
            $table->foreign('discount_code_id')->references('id')->on("discount_codes");
            $table->foreign('departure_same_way_route_id')->references('id')->on("same_way_routes");
            $table->foreign('destination_same_way_route_id')->references('id')->on("same_way_routes");
            $table->foreign('trip_id')->references('id')->on("trips");
            $table->foreign('customer_id')->references('id')->on("customers");
            $table->foreign('seat_id')->references('id')->on("seats");
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
        Schema::dropIfExists('orders');
    }
};