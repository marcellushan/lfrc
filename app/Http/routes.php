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

Route::resource('family', 'FamilyController');
Route::resource('child', 'ChildController');
Route::resource('caregiver', 'CaregiverController');
Route::resource('ncfas', 'NcfasController');
Route::get('ncfas/new_ncfas', 'NcfasController@newNcfas');
