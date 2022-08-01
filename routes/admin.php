<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::post('login', [AdminController::class, 'handleLogin'])->name("handleAdminLogin");

Route::group(['middleware' => ['guest:admin']], function () {
    Route::get('login', [AdminController::class, 'login'])->name("adminLogin");
});


Route::group(['middleware' => ['authAdmin']], function () {

    Route::get('logout', [AdminController::class, 'hangleLogout'])->name("handleAdminLogout");

});