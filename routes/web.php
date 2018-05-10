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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route
Route::middleware(['auth'])->group(function(){
	//Roles ahora creamos las 7 rutas basicas de un crud
	// ESTRUCTURA BASE de la RUTA   las rutas estan relacionadas con las rutas
	//Route::post(la ruta)->name(el nombre de la ruta)
	//		->middleware(el permiso);
	
	Route::post('roles/store','RoleController@store')->name('roles.store')
			->middleware('permission:roles.create');

	Route::get('roles','RoleController@index')->name('roles.index')
			->middleware('permission:roles.index');

	Route::get('roles/create','RoleController@create')->name('roles.create')
			->middleware('permission:roles.create');

	Route::put('roles/{role}','RoleController@update')->name('roles.update')
			->middleware('permission:roles.edit');

	Route::get('roles/{role}','RoleController@show')->name('roles.show')
			->middleware('permission:roles.show');

	Route::delete('roles/{role}','RoleController@destroy')->name('roles.destroy')
			->middleware('permission:roles.destroy');

	Route::get('roles/{role}/edit','RoleController@edit')->name('roles.edit')
			->middleware('permission:roles.edit');

//Puerta las 7 rutas de las puertas
	//Puerta las 7 rutas de las puertas
	Route::post('puertas/store','PuertaController@store')->name('puertas.store')
			->middleware('permission:puertas.create');

	Route::get('puertas','PuertaController@index')->name('puertas.index')
			->middleware('permission:puertas.index');

	Route::get('puertas/create','PuertaController@create')->name('puertas.create')
			->middleware('permission:puertas.create');

	Route::put('puertas/{puerta}','PuertaController@update')->name('puertas.update')
			->middleware('permission:puertas.edit');

	Route::get('puertas/{puerta}','PuertaController@show')->name('puertas.show')
			->middleware('permission:puertas.show');

	Route::delete('puertas/{puerta}','PuertaController@destroy')->name('puertas.destroy')
			->middleware('permission:puertas.destroy');

	Route::get('puertas/{puerta}/edit','PuertaController@edit')->name('puertas.edit')
			->middleware('permission:puertas.edit');
	/*		//--------ABRIR---------
	Route::get('puertas/store','PuertaController@abrir')->name('puertas.abrir')
			->middleware('permission:puertas.abrir');
			//----------------CeRRAR------------------
	Route::get('puertas/store','PuertaController@cerrar')->name('puertas.cerrar')
			->middleware('permission:puertas.cerrar');
			*/

//Users

	Route::get('users','UserController@index')->name('users.index')
			->middleware('permission:users.index');

	

	Route::put('users/{user}','UserController@update')->name('users.update')
			->middleware('permission:users.edit');

	Route::get('users/{user}','UserController@show')->name('users.show')
			->middleware('permission:users.show');

	Route::delete('users/{user}','UserController@destroy')->name('users.destroy')
			->middleware('permission:users.destroy');

	Route::get('users/{user}/edit','UserController@edit')->name('users.edit')
			->middleware('permission:users.edit');
});

