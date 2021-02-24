<?php

use Illuminate\Support\Facades\Route;
use Nexmo\Admin\Http\Controllers\PanelController;
Route::group(['prefix' => 'adminstrator', 'namespace' => 'Nexmo\Admin\Http\Controllers', 'middleware' => ['web', 'auth']], function ($router) {
    Route::get('panel',[PanelController::class,'index'])->name('show.panel');


});
