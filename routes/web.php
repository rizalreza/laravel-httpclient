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

Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');
Route::post('/post/create', 'PostController@store')->name('post.store');
Route::get('/post/{id}/edit', 'PostController@edit')->name('post.edit');
Route::put('/post/update/{id}', 'PostController@update')->name('post.update');;
Route::delete('/post/{id}/delete', 'PostController@destroy')->name('post.destroy');

Route::get('/jabatan', 'JabatanController@index')->name('jabatan.index');
Route::get('/jabatan/create', 'JabatanController@create')->name('jabatan.create');
Route::post('/jabatan/create', 'JabatanController@store')->name('jabatan.store');
Route::get('/jabatan/{id}/edit', 'JabatanController@edit')->name('jabatan.edit');
Route::put('/jabatan/update/{id}', 'JabatanController@update')->name('jabatan.update');;
Route::delete('/jabatan/{id}/delete', 'JabatanController@destroy')->name('jabatan.destroy');


Route::get('/join', 'JoinController@index')->name('join.index');