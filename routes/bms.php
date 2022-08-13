<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BMS\ForgotPasswordController;
use App\Http\Controllers\BMS\GoogleController;
use App\Http\Controllers\BMS\BMSController;

Route::group(['middleware' => ['guest:bms']], function () {
    Route::get('login', [BMSController::class, 'login'])->name("bmsLogin");
    Route::get('auth/google', [GoogleController::class, "redirectToGoogle"])->name('bmsLoginGoogle');
    Route::get('auth/google/callback', [GoogleController::class, "handleGoogleCallback"]);
    Route::post('login', [BMSController::class, 'handleLogin'])->name("bmsHandleLogin");
    
    Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('bmsForgotPassword');
    Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('bmsHandleForgotPassword'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('bmsResetPassword');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('bmsHandleResetPassword');
});

Route::group(['middleware' => ['authBms']], function () {
    Route::get('logout', [BMSController::class, 'handleLogout'])->name("bmsHandleLogout");
});

