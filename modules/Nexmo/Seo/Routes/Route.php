<?php


use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Seo\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('seo', 'SeoController');


});
