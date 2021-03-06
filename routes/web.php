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

Route::get('/', "DebaterController@index");
Route::get('/timetable', "DebaterController@timetable");
Route::get('/debater/{debater}', "DebaterController@show");

Route::get("/info/organizators", function () {
    return view("info/organizators");
});

