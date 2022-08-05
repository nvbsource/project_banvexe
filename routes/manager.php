<?php

use App\Http\Controllers\Manager\CustomerController;
use App\Http\Controllers\Manager\TripController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Manager\DashboardController;
use App\Http\Controllers\Manager\VehicleController;
use App\Http\Controllers\Manager\RouteController;
use App\Http\Controllers\Manager\OfficeController;

Route::group(['middleware' => ['authAdmin', 'accountAccess:manager'], "as" => "manager."], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");

    Route::group(['prefix' => 'office'], function () {
        Route::get('/', [OfficeController::class, 'viewList'])->name("listOffice");
        Route::get('/{id}', [OfficeController::class, 'viewDetail'])->name("viewOffice");
    });

    Route::group(['prefix' => 'route'], function () {
        Route::get('/', [RouteController::class, 'viewList'])->name("listRoute");
    });

    Route::group(['prefix' => 'trip'], function () {
        Route::get('/', [TripController::class, 'viewList'])->name("listTrip");
        Route::get('/create', [TripController::class, 'viewCreate'])->name("createTrip");
    });

    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', [CustomerController::class, 'viewList'])->name("listCustomer");
    });

    Route::group(['prefix' => 'vehicle'], function () {
        Route::get('/', [VehicleController::class, 'viewList'])->name("listVehicle");
        Route::get('/create', [VehicleController::class, 'viewCreate'])->name("createVehicle");
        Route::get('/{id}', [VehicleController::class, 'detail'])->name("detailVehicle");
    });
});