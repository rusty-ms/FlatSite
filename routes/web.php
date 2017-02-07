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
        return "<center><b>Crimm is no more. Sorry.</b></center>";
    });
});
Route::group(['domain' => 'nwraasoccer.com'], function () {
    Route::get('/', function () {
        return "<meta http-equiv=\"refresh\" content=\"0; url=http://www.nwraa.com/Default.aspx?tabid=904970\" />";
    });
});
Route::group(['domain' => 'rusty.ms'], function () {
    Route::get('/', function () {
        return view('rustyms');
    });
});
Route::group(['domain' => 'pickup.nwraasoccer.com'], function () {
    Route::get('/', function () {
        return view('pickupnwraa');
    });
});
Route::group(['domain' => 'idealtechllc.com'], function () {
    Route::get('/', function () {
        return "<center><b>Ideal Technologies is closed for business at this time. If you'd like to contact Rusty, please visit <a href=\"http://rusty.ms\">http://rusty.ms</a>. If you are looking for IT services, please visit <a href=\"http://pileum.com\">Pileum</a>.</b></center>";
    });
});
