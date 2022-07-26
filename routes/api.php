<?php

use App\Http\Controllers\Manager\AccountController;
use App\Http\Controllers\Manager\OfficeController;
use App\Http\Controllers\Manager\RouteController;
use App\Http\Controllers\DriverController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PassengerCarCompanyApiController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Manager\DiscountController;
use App\Http\Controllers\Manager\OrderController;
use App\Http\Controllers\Manager\SeatController;
use App\Http\Controllers\Manager\TripController;
use App\Http\Controllers\Manager\VehicleController;
use App\Models\Order;

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




Route::post('/login', [AuthController::class, 'login']);
Route::post('/check-verification', [AuthController::class, 'checkVerificationCode']);
Route::post('/send-new-code', [AuthController::class, 'sendNewCode']);




Route::group(["prefix" => "driver"], function () {
    Route::get('/getDriverByCompany/{company_id}', [DriverController::class, 'getDriverByCompany']);
});

Route::group(['prefix' => 'trip', 'middleware' => 'authBms'], function () {
    Route::get('/search', [TripController::class, 'search']);
    Route::get('/{tripId}', [TripController::class, 'detail']);
});

Route::group(["prefix" => "passengerCarCompany"], function () {
    Route::post('/', [PassengerCarCompanyApiController::class, 'create']);
});

Route::group(['prefix' => 'office', 'middleware' => 'authBms'], function () {
    Route::post('/', [OfficeController::class, 'create']);
    Route::delete('/{id}', [OfficeController::class, 'detroy']);
    Route::put('/{id}', [OfficeController::class, 'update']);

    Route::post('/{id}/staff', [AccountController::class, 'create']);
});

Route::group(['prefix' => 'staff', 'middleware' => 'authBms'], function () {
    Route::put('/{id}', [AccountController::class, 'update']);
    Route::delete('/{id}', [AccountController::class, 'detroy']);
});

Route::group(['prefix' => 'route', 'route' => 'authBms'], function () {
    Route::post('/', [RouteController::class, 'create']);
});

Route::group(['prefix' => 'seat', 'route' => 'authBms'], function () {
    Route::post('/blockseat', [SeatController::class, 'blockSeat']);
});

Route::group(['prefix' => 'order', 'route' => 'authBms'], function () {
    Route::post('/', [OrderController::class, 'create']);
});

Route::group(['prefix' => 'discount', 'route' => 'authBms'], function () {
    Route::post('/checkDiscount', [DiscountController::class, 'checkDiscount']);
});


Route::group(['prefix' => 'vehicle', 'middleware' => 'authBms'], function () {
    Route::post('/', [VehicleController::class, 'create']);
    Route::delete('/{id}', [VehicleController::class, 'detroy']);
    Route::put('/{id}', [VehicleController::class, 'update']);
    Route::post('/{id}/picture', [VehicleController::class, 'uploadImage']);
    Route::delete('/picture/{id}', [VehicleController::class, 'deleteImage']);
});



