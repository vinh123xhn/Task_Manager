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

Route::get('/task', 'taskmanagerController@index') -> name('task') ;

Route::get('/create', 'taskmanagerController@create') -> name('create');

Route::post('/create', 'taskmanagerController@store') -> name('store');

Route::get('/{id}/edit', 'taskmanagerController@edit') ->name('edit');

Route::post('/{id}/edit', 'taskmanagerController@update') ->name('update');

Route::get('/{id}/delete', 'taskmanagerController@delete') ->name('delete');
