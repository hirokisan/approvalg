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

Route::get('option', function () {
        return view('option');
})->name('option');


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('service', 'ServiceController');
Route::resource('project', 'ProjectController');
Route::get('/project/create/{id}', 'ProjectController@create')->name('project.create');
Route::resource('user', 'UserController');
