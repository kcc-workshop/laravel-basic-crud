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








Route::get('/counter', 'CounterController@index');

Route::get('/increase/{count}', 'CounterController@increase');

Route::get('/decrease/{count}', 'CounterController@decrease');








Route::get('/random', 'CounterController@randomView');



Route::post('/random', 'CounterController@random');







/**
 * Students.
 *
 */
Route::get('/student/create', 'StudentController@index');
Route::post('/student/create', 'StudentController@create');

Route::get('/student-list', 'StudentController@list');
Route::get('/student/{id}', 'StudentController@view');


Route::get('/student/update/{id}', 'StudentController@edit');





Route::post('/student/update', 'StudentController@update');










Route::get('/student/remove/{id}', 'StudentController@remove');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
