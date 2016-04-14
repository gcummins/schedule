<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/schedule', ['as' => 'schedule.index', 'uses' => 'ScheduleController@index']);

Route::get('/bay/create', ['as' => 'bay.create', 'uses' => 'BayController@create']);
Route::post('/bay/create', ['as' => 'bay.store', 'uses' => 'BayController@store']);
