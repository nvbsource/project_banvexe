<?php

use App\Http\Controllers\Client\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get("/payment", [PaymentController::class, "index"]);
Route::post("/payment", [PaymentController::class, "payment"])->name("handlePayment");
Route::get("/payment/vnpay/callback", [PaymentController::class, "returnVnpay"]);
Route::get("/payment/momo/callback", [PaymentController::class, "returnMomo"]);