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

Route::get('/tasks', 'TaskController@all')->name('tasks.all');

Route::post('/tasks', 'TaskController@store')->name('tasks.store');

Route::get('/tasks/{task}', 'TaskController@show')->name('tasks.show');

Route::put('/tasks/{task}', 'TaskController@update')->name('tasks.update');

Route::delete('/tasks/{task}', 'TaskController@destory')->name('tasks.destroy');

Route::get('/', function () {
    return view('welcome');
});
