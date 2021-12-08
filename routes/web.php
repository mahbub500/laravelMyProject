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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student', 'StudentController@index')->name('student');
Route::get('/student/create', 'StudentController@create')->name('student.create');
Route::post('/student/insert', 'StudentController@store');
Route::get('/student/{user}/edit', 'StudentController@edit')->name('student.edit');
Route::get('/student/{user}/delete', 'StudentController@delete')->name('student.delete');
Route::patch('/student/{user}', 'StudentController@update')->name('student.update');

