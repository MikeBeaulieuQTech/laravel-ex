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

Route::get('/welcome', function () {
    return view('welcome');
});


// App Specific Routes


Route::get('/', 'DashboardController@login');
Route::post('/login', 'DashboardController@postLogin')->name('login');
Route::get('/Profile', 'DashboardController@profile');
Route::get('/Dashboard', 'DashboardController@index');
Route::post('/Dashboard/credential', 'DashboardController@storeCredential');
Route::post('/Dashboard/profile', 'DashboardController@storeProfile');
Route::post('/Dashboard/post', 'DashboardController@post');

Route::get('/Expenses/{session_id}', 'ExpenseController@index');