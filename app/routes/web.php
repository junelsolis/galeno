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

Route::get('/physician', 'PhysicianController@main')->middleware('auth');

Route::get('/admin', 'AdminController@main')->middleware('auth');
