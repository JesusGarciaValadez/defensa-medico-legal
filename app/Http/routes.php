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

Route::get( '/', 'HomeController@index' );

Route::get( '/home', 'HomeController@index' );

Route::get( '/quienes-somos', function () { return view( 'quienes-somos' ); } );

//Route::get( '/aiddem', function () { return view( 'aiddem' ); } );

//Route::get( '/que-hace-la-aiddem', function () { return view( 'que-hace-la-aiddem' ); } );

Route::get( '/art-272', function () { return view( 'art272' ); } );

Route::get( '/art-81', function () { return view( 'art81' ); } );

Route::get( '/servicios', function () { return view( 'servicios' ); } );

Route::get( '/beneficios', function () { return view( 'beneficios' ); } );

//Route::get('/corte-interamericana-de-derechos-humanos', function () { return view('corte-interamericana-de-derechos-humanos'); } );

//Route::get( '/legislacion-internacional', function () { return view( 'legislacion-internacional' ); } );

//Route::model( 'solicitud', 'Solicitud' );
Route::any( 'agradecimiento', [
            'as' => 'agradecimiento',
            function ()
            {
                return View::make( 'agradecimiento' );
            }
] );
Route::any( 'error', [
            'as' => 'error',
            function ()
            {
                return View::make( 'error' );
            }
] );
Route::any( 'contacto', [
            'as' => 'contacto',
            function ()
            {
                return View::make( 'contacto' );
            }
] );
Route::get( 'solicitud', 'SolicitudController@index' );
Route::get( 'solicitud/crear', 'SolicitudController@create' );
Route::post( 'solicitud/store', 'SolicitudController@store' );

Route::get( '/contrato', function () { return view( 'contrato' ); } );

Route::get( '/aviso-de-privacidad', function () { return view( 'aviso-de-privacidad' ); } );

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);*/
