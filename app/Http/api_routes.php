<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/




Route::group(['middleware' => 'api.auth'], function () {
    Route::get('getUserInfo', 'AuthAPIController@getUserInfo');
    Route::get('logout', 'AuthAPIController@logout');
});

Route::resource('posts', 'PostAPIController');

// Auth
Route::any('login', 'AuthAPIController@login');
// Route::post('refresh', 'AuthAPIController@refreshToken');