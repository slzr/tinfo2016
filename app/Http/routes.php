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

Route::get('/',          ['as'=> 'inicio',     'uses'=> 'MainController@index']);
Route::get('inicio',     ['as'=> 'inicio',     'uses'=> 'MainController@index']);
Route::get('tendencias', ['as'=> 'tendencias', 'uses'=> 'MainController@tendencias']);
Route::get('recursos',   ['as'=> 'recursos',   'uses'=> 'MainController@recursos']);
Route::get('autores',    ['as'=> 'autores',    'uses'=> 'MainController@autores']);

