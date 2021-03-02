<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\ContactBack\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('contact-backend', 'ContactBackend');


});
