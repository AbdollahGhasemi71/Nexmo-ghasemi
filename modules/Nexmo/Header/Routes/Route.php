<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Header\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('header', 'HeaderController');


});
