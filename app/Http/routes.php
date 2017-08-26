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

Route::get('/test', function () {
    return view('welcome');
});

Route::resource('family', 'FamilyController');
Route::get('family/view_all/{id}', 'FamilyController@viewAll');
Route::resource('child', 'ChildController');
Route::resource('caregiver', 'CaregiverController');
Route::resource('ncfas', 'NcfasController');
Route::get('ncfas/new_ncfas', 'NcfasController@newNcfas');
Route::resource('aapi', 'AapiController');
Route::resource('reabuse', 'ReabuseController');
Route::resource('close_reason', 'CloseReasonController');
Route::get('data/ncfas/{id}', 'DataController@ncfas');
Route::get('data/complete', 'DataController@complete');