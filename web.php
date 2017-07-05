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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'ListController@bucketList');
Route::get('/getCount', 'ListController@getCount');
Route::get('/{item}', 'ListController@show');

Route::get('/{item}/edit', 'ListController@edit');
Route::post('/add', 'ListController@store');
Route::post('/{item}/checkoff', 'ListController@checkoff');
Route::patch('/{item}/update', 'ListController@update');
Route::get('/{item}/delete', 'ListController@delete');
Route::delete('/{item}/deleted', 'ListController@deleted');

Route::get('/notes/{note}/edit', 'NotesController@edit');
Route::post('/{item}/notes', 'NotesController@store');
Route::patch('/notes/{note}', 'NotesController@update');

Route::post('/{item}/images', 'ImagesController@store');
//
//
// Auth::routes();
//  Route::get('/list', 'ListController@bucketList');
//  Route::get('/', 'HomeController@index');
//
//
// Route::get('/home', 'HomeController@index');
