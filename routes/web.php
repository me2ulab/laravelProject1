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
Route::resource('/projects','ProjectsController');

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/projects','ProjectsController@index');
// Route::get('/projects/create','ProjectsController@create');
// Route::post('/projects','ProjectsController@store');
Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');
Route::post('completed-task/{task}','CompletedTasksController@store');
Route::delete('completed-task/{task}','CompletedTasksController@destroy');
