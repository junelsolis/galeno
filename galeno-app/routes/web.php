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

Route::get('/', 'LoginController@main')->middleware('guest');
Route::post('login', 'LoginController@login');

Route::get('reset-password', 'LoginController@showResetPassword');
Route::post('reset-password', 'LoginController@processResetPassword');
Route::get('check-email-password-reset', 'LoginController@showCheckEmailReset');

Route::middleware(['auth', 'multirole'])->group(function () {
    // Route::get('app', 'LoginController@app');
    Route::get('app', 'UserViewController@app');
    Route::get('app/logout', 'LoginController@logout');
});
