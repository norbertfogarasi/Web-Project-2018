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

//Delete
Route::delete('/tools/{id}', 'ToolsController@destroy');
Route::delete('/halls/{id}', 'HallsController@destroy');

//Edit
Route::get('/tools/{id}/edit', 'ToolsController@edit');
Route::get('/halls/{id}/edit', 'HallsController@edit');
Route::patch('/tools/{id}', 'ToolsController@update');
Route::patch('/halls/{id}', 'HallsController@update');

Route::get('/tools/booking/{tool}', 'BookingController@toolIndex');
Route::get('/halls/booking/{hall}', 'BookingController@hallIndex');

Route::get('/', 'HomeController@index');

Route::get('/halls', 'HallsController@index');

Route::post('/halls', 'HallsController@store');

Route::get('/halls/create', 'HallsController@create');

Route::get('/halls/{hall}', 'HallsController@show');

Route::delete('/halls/{hall}', 'HallsController@destroy');

Route::get('/tools', 'ToolsController@index');

Route::post('/tools', 'ToolsController@store');

Route::get('/tools/create', 'ToolsController@create');

Route::get('/tools/{tool}', 'ToolsController@show');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();
