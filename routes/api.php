<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([],function() {

	Route::resource('equipos','EquipoController');

	Route::get('/equipos/{equipo}/personas','EquipoController@getPersonas');

	Route::get('/equipos/{equipo}/historico','EquipoController@getHistorico');
});


Route::group([],function(){

	Route::resource('companias','CompaniaController');


	Route::resource('novedades','NovedadController',[
		'parameters' => ['novedades' => 'novedad']
	]);

	Route::resource('intervenciones','IntervencionController',[
		'parameters' => ['intervenciones' => 'intervencion']
	]);

	Route::get('/ping','DefaultController@ping');


});