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
    return view('test');
});

Route::resource('family', 'FamilyController');
Route::get('family/question/{id}', 'FamilyController@question');
Route::get('family/view_all/{id}', 'FamilyController@viewAll');
Route::get('family/delete/{id}', 'FamilyController@delete');
Route::post('family/close', 'FamilyController@close');
//Route::resource('caregiver', 'CaregiverController');

Route::resource('aapi', 'AapiController');
Route::resource('reabuse', 'ReabuseController');
Route::resource('close_reason', 'CloseReasonController');
Route::get('data/ncfas/{id}', 'DataController@ncfas');
Route::get('data/complete', 'DataController@complete');

/*
 * Child
 */
Route::get('child/create/{id}', 'ChildController@create');
Route::post('child', 'ChildController@store');
Route::get('child/{id}/edit', 'ChildController@edit');
Route::post('child/update/{id}', 'ChildController@update');
Route::delete('child/{id}', 'ChildController@destroy');

/*
 * Caregiver
 */

Route::get('caregiver/create/{id}', 'CaregiverController@create');
Route::post('caregiver', 'CaregiverController@store');
Route::get('caregiver/{id}/edit', 'CaregiverController@edit');
Route::post('caregiver/update/{id}', 'CaregiverController@update');
Route::delete('caregiver/{id}', 'CaregiverController@destroy');


/*
 * AAPI
 */

Route::get('aapi/create/{id}', 'AapiController@create');
Route::post('aapi', 'AapiController@store');

/*
 * NCFAS
 */

Route::get('ncfas/{id}', 'NcfasController@index');

Route::get('ncfas/create/{id}/{category_id}/{phase_id}', 'NcfasController@create');
Route::post('ncfas', 'NcfasController@store');
