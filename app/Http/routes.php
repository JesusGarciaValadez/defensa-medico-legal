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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/quienes-somos', function () { return view('quienes-somos'); } );

Route::get('/aiddem', function () { return view('aiddem'); } );

Route::get('/que-hace-la-aiddem', function () { return view('que-hace-la-aiddem'); } );

Route::get('/art-272', function () { return view('art272'); } );

Route::get('/art-81', function () { return view('art81'); } );

Route::get('/servicios', function () { return view('servicios'); } );

Route::get('/beneficios', function () { return view('beneficios'); } );

Route::get('/corte-interamericana-de-derechos-humanos', function () { return view('corte-interamericana-de-derechos-humanos'); } );

Route::get('/respaldo-internacional', function () { return view('respaldo-internacional'); } );

Route::get('/afiliate', function () { return view('afiliate'); } );

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
