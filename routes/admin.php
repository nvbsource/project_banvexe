<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\GoogleController;

Route::post('login', [AdminController::class, 'handleLogin'])->name("handleAdminLogin");

Route::get('auth/google', [GoogleController::class, "redirectToGoogle"])->name('adminLoginGoogle');
Route::get('auth/google/callback', [GoogleController::class, "handleGoogleCallback"]);

Route::group(['middleware' => ['guest:admin']], function () {
    Route::get('login', [AdminController::class, 'login'])->name("adminLogin");
});


Route::group(['middleware' => ['authAdmin']], function () {

    Route::get('logout', [AdminController::class, 'hangleLogout'])->name("handleAdminLogout");
});