<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\GoogleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;

Route::group(['middleware' => ['guest:admin']], function () {
    Route::get('login', [AdminController::class, 'login'])->name("adminLogin");
    Route::get('auth/google', [GoogleController::class, "redirectToGoogle"])->name('adminLoginGoogle');
    Route::get('auth/google/callback', [GoogleController::class, "handleGoogleCallback"]);
    Route::post('login', [AdminController::class, 'handleLogin'])->name("adminHandleLogin");
    
    Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('adminForgotPassword');
    Route::post('forgot-password', [ForgotPasswordController::class, 'submitForgotPasswordForm'])->name('adminHandleForgotPassword'); 
    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('adminResetPassword');
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('adminHandleResetPassword');
});

Route::group(['middleware' => ['authAdmin']], function () {
    Route::get('logout', [AdminController::class, 'handleLogout'])->name("adminHandleLogout");
    Route::group(["as" => "admin."], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");
        Route::group(["prefix" => "district", "as" => "district."], function(){
            Route::get('/create', [DistrictController::class, 'create'])->name("create");
        });
    });
});
