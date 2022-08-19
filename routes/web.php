<?php

use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\InformationController;
use App\Http\Controllers\Client\PaymentController;
use App\Http\Controllers\Manager\OrderController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

Route::get("/payment/vnpay/callback", [OrderController::class, "callbackVNPay"]);
Route::get("/payment/momo/callback", [OrderController::class, "callbackMomo"]);

Route::get("/payment/vnpay/ipn", [OrderController::class, "ipnVNPay"]);
Route::post("/payment/momo/ipn", [OrderController::class, "ipnMomo"]);



Route::group(["as" => "client."], function(){
    Route::get("/", [HomeController::class, "index"])->name("home");
    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
    
    Route::group(["prefix" => "information", "middleware" => "authClient"], function(){
        Route::get("/", [InformationController::class, "index"])->name("information");
        Route::post("/", [InformationController::class, "change"])->name("change");
        Route::get("/ticket", [InformationController::class, "ticket"])->name("ticket");
    });

    Route::get("/payment-result", [PaymentController::class, "result"])->name("paymentResult");
    Route::get("/chuyen-xe", [HomeController::class, "trip"])->name("trip");
});


