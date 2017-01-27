<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['domain' => 'flatsite.dev.idealtechllc.com'], function () {
    Route::get('/', function () {
        return "Flatsite Dev Site";
    });
});
Route::group(['domain' => 'crimm.me'], function () {
    Route::get('/', function () {
        return "Crimm is being redeveloped for new adventures. Please check back soon.";
    });
});
Route::group(['domain' => 'rusty.ms'], function () {
    Route::get('/', function () {
        return view('rusty.ms');
    });
});
Route::group(['domain' => 'pickup.nwraasoccer.com'], function () {
    Route::get('/', function () {
        return "Pickup is being redeveloped for new adventures. Please check back soon.";
    });
});
Route::group(['domain' => 'idealtechllc.com'], function () {
    Route::get('/', function () {
        return "Ideal is being redeveloped for new adventures. Please check back soon.";
    });
});