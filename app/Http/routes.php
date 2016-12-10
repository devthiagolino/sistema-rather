<?php

Route::group(['prefix' => 'admin'], function()
{

	Route::get('/login', 'Admin\AuthController@login')->name('admin.auth.login');
	Route::get('/logout', 'Admin\AuthController@logout')->name('admin.auth.logout');
	Route::post('/login', 'Admin\AuthController@authenticate')->name('admin.auth.authenticate');

});


Route::group(['prefix' => 'web'], function()
{

	Route::get('/login', 'AuthController@login')->name('web.auth.login');
	Route::get('/logout', 'AuthController@logout')->name('web.auth.logout');
	Route::post('/login', 'AuthController@authenticate')->name('web.auth.authenticate');

});

Route::group(['middleware' => 'auth:web', 'prefix' => '/web'], function()
{

	Route::get('/', 'HomeController@home')->name('web.dashboard');
	
	Route::group(['prefix' => 'clientes'], function()
	{
		
		Route::get('/', function(){
			return view('statics.listagem_clientes');
		})->name('web.clientes.index');

		Route::get('/create', function(){
			return view('statics.form_clientes');
		})->name('web.clientes.create');

	});

	Route::group(['prefix' => 'check'], function()
	{

		Route::get('/', function(){
			return view('statics.checkin_out_listagem');
		})->name('web.check.index');
		
		Route::get('/in', function(){
			return view('statics.checkin');
		})->name('web.check.in');

		Route::get('/out', function(){
			return view('statics.checkout');
		})->name('web.check.out');

	});

});


Route::group(['middleware' => 'auth:admin', 'prefix' => '/admin'], function()
{

	Route::get('/', 'Admin\HomeController@home')->name('admin.dashboard');	

	Route::group(['prefix' => 'clientes', 'namespace' => 'Admin'], function()
	{
		
		Route::get('/', 'ClientesController@index')->name('admin.clientes.index');
		Route::get('/create', 'ClientesController@create')->name('admin.clientes.create');
		Route::get('/{id}/edit', 'ClientesController@edit')->name('admin.clientes.edit');
		Route::delete('/{id}', 'ClientesController@destroy')->name('admin.clientes.delete');

	});
	

});

Route::get('/', function()
{

	return 'Rather Coworking - Novidades em breve...';

});