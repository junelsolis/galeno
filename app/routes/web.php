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


Route::get('/', 'LoginController@showLogin')->middleware('guest');
Route::post('/', 'LoginController@login')->middleware('guest');
Route::get('/logout', 'LoginController@logout');

Route::get('/physician', 'PhysicianController@main')->middleware('auth','physician');
Route::get('/physician/patient/{id}', 'PhysicianController@patient')->middleware('auth','physician');

Route::get('/admin', 'AdminController@main')->middleware('auth');


// AJAX routes
Route::get('/ajax/encounter/{id}/chief-complaint', 'EncounterController@getChiefComplaint')->middleware('auth');
Route::post('/ajax/encounter/{id}/chief-complaint', 'EncounterController@editChiefComplaint')->middleware('auth');
Route::get('/ajax/encounter/{id}/note', 'EncounterController@getNote')->middleware('auth');
Route::post('/ajax/encounter/{id}/note', 'EncounterController@editNote')->middleware('auth');

Route::get('/ajax/encounter/{id}/diagnosis', 'EncounterController@getDiagnosis')->middleware('auth');
Route::post('/ajax/encounter/{id}/diagnosis', 'EncounterController@addDiagnosis')->middleware('auth');
Route::post('/ajax/encounter/{encounter_id}/diagnosis/{diagnosis_id}/edit', 'EncounterController@editDiagnosis')->middleware('auth');


Route::post('/ajax/diagnosis/{id}/disable', 'DiagnosisController@disable')->middleware('auth','physician');
Route::post('/ajax/diagnosis/{id}/delete', 'DiagnosisController@delete')->middleware('auth','physician');
