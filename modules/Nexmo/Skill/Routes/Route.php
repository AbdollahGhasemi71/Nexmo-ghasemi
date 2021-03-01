<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Skill\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::resource('skill', 'SkillController');


});
