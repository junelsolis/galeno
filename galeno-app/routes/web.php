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

// Route::get('app')->middleware('auth');

Route::get('app')->middleware(['auth', 'multirole']);

Route::middleware(['auth'])->group(function () {
    Route::get('app');

    Route::get('app/switcher', function () {
        return view('switcher');
    });
    Route::get('app/nurse', function () {
        return view('nurse.main');
    });

    Route::get('app/staff', function() {
        return view('staff.main');
    });

    Route::get('app/logout', 'LoginController@logout');
});
