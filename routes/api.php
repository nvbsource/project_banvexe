<?php

use App\Http\Controllers\Manager\AccountController;
use App\Http\Controllers\Manager\OfficeController;
use App\Http\Controllers\Manager\RouteController;
use App\Http\Controllers\Api\TripApiController;
use App\Http\Controllers\DriverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PassengerCarCompanyApiController;
use App\Http\Controllers\Manager\VehicleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(["prefix" => "driver"], function () {
    Route::get('/getDriverByCompany/{company_id}', [DriverController::class, 'getDriverByCompany']);
});

Route::group(["prefix" => "trip"], function () {
    Route::post('/', [TripApiController::class, 'create']);
});

Route::group(["prefix" => "passengerCarCompany"], function () {
    Route::post('/', [PassengerCarCompanyApiController::class, 'create']);
});

Route::group(['prefix' => 'office', 'middleware' => 'authAdmin'], function () {
    Route::post('/', [OfficeController::class, 'create']);
    Route::delete('/{id}', [OfficeController::class, 'detroy']);
    Route::put('/{id}', [OfficeController::class, 'update']);

    Route::post('/{id}/staff', [AccountController::class, 'create']);
});

Route::group(['prefix' => 'staff', 'middleware' => 'authAdmin'], function () {
    Route::put('/{id}', [AccountController::class, 'update']);
    Route::delete('/{id}', [AccountController::class, 'detroy']);
});

Route::group(['prefix' => 'route', 'route' => 'authAdmin'], function () {
    Route::post('/', [RouteController::class, 'create']);
});


Route::group(['prefix' => 'vehicle', 'middleware' => 'authAdmin'], function () {
    Route::post('/', [VehicleController::class, 'create']);
    Route::delete('/{id}', [VehicleController::class, 'detroy']);
    Route::put('/{id}', [VehicleController::class, 'update']);
    Route::post('/{id}/picture', [VehicleController::class, 'uploadImage']);
    Route::delete('/picture/{id}', [VehicleController::class, 'deleteImage']);
});
