<?php

Route::get('/login', 'AuthController@login')->name('auth.login');
Route::get('/logout', 'AuthController@logout')->name('auth.logout');
Route::post('/login', 'AuthController@authenticate')->name('auth.authenticate');

Route::group(['middleware' => 'auth'], function()
{

	Route::get('/', 'HomeController@home')->name('dashboard');
	
	Route::group(['prefix' => 'clientes'], function()
	{
		
		Route::get('/', function(){
			return view('statics.listagem_clientes');
		})->name('clientes.index');

		Route::get('/create', function(){
			return view('statics.form_clientes');
		})->name('clientes.create');

	});

	Route::group(['prefix' => 'check'], function()
	{

		Route::get('/', function(){
			return view('statics.checkin_out_listagem');
		})->name('check.index');
		
		Route::get('/in', function(){
			return view('statics.checkin');
		})->name('check.in');

		Route::get('/out', function(){
			return view('statics.checkout');
		})->name('check.out');

	});

});
