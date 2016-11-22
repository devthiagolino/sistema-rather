<?php

Route::get('/login', 'AuthController@login')->name('auth.login');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
Route::post('/login', 'AuthController@authenticate')->name('auth.authenticate');

Route::group(['middleware' => 'auth'], function()
{

	Route::get('/', 'HomeController@home')->name('dashboard');

});
