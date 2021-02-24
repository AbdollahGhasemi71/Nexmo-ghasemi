<?php



use Illuminate\Support\Facades\Route;
use Nexmo\User\Http\Controllers\Auth\ForgotPasswordController;
use Nexmo\User\Http\Controllers\Auth\LoginController;
use Nexmo\User\Http\Controllers\Auth\RegisterController;
use Nexmo\User\Http\Controllers\Auth\ResetPasswordController;
use Nexmo\User\Http\Controllers\Auth\VerificationController;
use Nexmo\User\Http\Controllers\HomeController;


Route::group(['namespace' => 'Nexmo\User\Http\Controllers', 'middleware' => 'web'], function () {
    Route::post('email/verify', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
    Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');


    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

//    login

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

//    logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// reset Password
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::get('email/verify/send', [ForgotPasswordController::class, 'sendVerifyCodeEamil'])->name('password.sendVerifyCodeEmail');
    Route::post('email/verify/check/verify-code', [ForgotPasswordController::class, 'checkResetPasswordCode'])->name('password.checkResetPasswordCode');
    Route::get('password/change', [ResetPasswordController::class, 'showResetForm'])->name('password.showResetForm');
    Route::post('password/change', [ResetPasswordController::class, 'reset'])->name('password.update');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

});
