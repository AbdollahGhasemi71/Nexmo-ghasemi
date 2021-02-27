<?php


use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\About\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('about', 'AboutController');


});
