<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Admin\RouteController;
use App\Http\Controllers\Api\TripApiController;
use App\Http\Controllers\DriverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PassengerCarCompanyApiController;

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
    Route::post('/{id}/staff', [AccountController::class, 'addStaff']);
    Route::delete('/{id}', [OfficeController::class, 'detroy']);
    Route::put('/{id}', [OfficeController::class, 'update']);
});

Route::group(['prefix' => 'staff', 'middleware' => 'authAdmin'], function () {
    Route::put('/{id}', [AccountController::class, 'editStaff']);
    Route::delete('/{id}', [AccountController::class, 'detroyStaff']);
});
Route::group(['prefix' => 'route', 'route' => 'authAdmin'], function () {
    Route::post('/', [RouteController::class, 'create']);
});