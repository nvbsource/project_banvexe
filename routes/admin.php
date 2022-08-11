<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\GoogleController;

Route::post('login', [AdminController::class, 'handleLogin'])->name("handleAdminLogin");

Route::get('auth/google', [GoogleController::class, "redirectToGoogle"])->name('adminLoginGoogle');
Route::get('auth/google/callback', [GoogleController::class, "handleGoogleCallback"]);

Route::group(['middleware' => ['guest:admin']], function () {
    Route::get('login', [AdminController::class, 'login'])->name("adminLogin");

    Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot.password.get');
    Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('forgot.password.post'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});


Route::group(['middleware' => ['authAdmin']], function () {

    Route::get('logout', [AdminController::class, 'hangleLogout'])->name("handleAdminLogout");
});