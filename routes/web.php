<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ApiCoronaController@index');
Route::get('/tutorial', 'ApiCoronaController@tutorial');
Route::get('/global', 'ApiCoronaController@global');
Route::get('/instagram', 'ApiCoronaController@instagram');

Route::get('kasus',[
	'uses' => 'ApiCoronaController@perKasus',
	'as' => 'get.perKasus'
]);

Route::get('provinsi',[
	'uses' => 'ApiCoronaController@provinsi',
	'as' => 'get.provinsi'
]);

Route::get('all',[
	'uses' => 'ApiCoronaController@all',
	'as' => 'get.all'
]);