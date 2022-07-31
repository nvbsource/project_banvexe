<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\TripController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\Admin\OfficeController;

Route::post('login', [AdminController::class, 'handleLogin'])->name("handleAdminLoginaaa");

Route::group(['middleware' => ['guest:admin']], function () {
    Route::get('login', [AdminController::class, 'login'])->name("adminLogin");
});


Route::group(['middleware' => ['authAdmin']], function () {

    Route::get('logout', [AdminController::class, 'hangleLogout'])->name("hangleAdminLogout");
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
    });
});