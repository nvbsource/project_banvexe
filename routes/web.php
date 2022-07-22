<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PassengerCarCompanyController;
use App\Http\Controllers\VehicleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'administrator'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");
    // Group routes trip
    Route::group(['prefix' => 'trip'], function () {
        Route::get('/', [TripController::class, 'viewList'])->name("listTrips");
        Route::get('/create', [TripController::class, 'viewCreate'])->name("createTrip");
    });
    Route::group(['prefix' => 'passengerCarCompany'], function () {
        Route::get('/', [PassengerCarCompanyController::class, 'viewList'])->name("listPassengerCarCompany");
        Route::get('/create', [PassengerCarCompanyController::class, 'viewCreate'])->name("createPassengerCarCompany");
    });
    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', [CustomerController::class, 'viewList'])->name("listCustomer");
    });
    Route::group(['prefix' => 'vehicle'], function () {
        Route::get('/', [VehicleController::class, 'viewList'])->name("listVehicle");
    });
});