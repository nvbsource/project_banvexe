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
            $table->enum("paymentMethod", ["COD", "MOMO", "VNPAY", "ZALOPAY"])->default("COD");
            $table->boolean("isPayment")->default(false);
            $table->boolean("isTicketReceived")->default(false);
            $table->integer("price");
            $table->integer("discount")->default(0);
            $table->timestamp("ticketPickUpTime");
            $table->integer("paymentPalidityPeriod");
            $table->unsignedBigInteger("ticketOffice_id")->nullable();
            $table->unsignedBigInteger("trip_id");
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("departure_same_way_route_id")->nullable();
            $table->unsignedBigInteger("destination_same_way_route_id")->nullable();
            $table->foreign('ticketOffice_id')->references('id')->on("ticket_offices");
            $table->foreign('departure_same_way_route_id')->references('id')->on("same_way_routes");
            $table->foreign('destination_same_way_route_id')->references('id')->on("same_way_routes");
            $table->foreign('trip_id')->references('id')->on("trips");
            $table->foreign('customer_id')->references('id')->on("customers");
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