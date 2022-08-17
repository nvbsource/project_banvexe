<?php

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Manager\OrderController;
use Illuminate\Support\Facades\Route;

Route::get("/payment/vnpay/callback", [OrderController::class, "callbackVNPay"]);
Route::get("/payment/momo/callback", [OrderController::class, "callbackMomo"]);

Route::get("/payment/vnpay/ipn", [OrderController::class, "ipnVNPay"]);
Route::post("/payment/momo/ipn", [OrderController::class, "ipnMomo"]);




Route::get("/", [HomeController::class, "index"])->name("home");
Route::get("/payment-result", [PaymentController::class, "result"])->name("paymentResult");



