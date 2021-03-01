<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Portfolio\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('portfo', 'PortfolioController');


});
