<?php

use Illuminate\Support\Facades\Route;

use Nexmo\Front\Http\Controllers\FrontController;

Route::group(['namespace' => 'Nexmo\Front\Http\Controllers', 'middleware' => 'web'], function () {
    Route::get('/front-show', [FrontController::class, 'index'])->name('front.show');

});
