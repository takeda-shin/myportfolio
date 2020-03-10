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

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show')->where('post','[0-9]+')->middleware('auth');
Route::get('/posts/create', 'PostsController@create')->middleware('auth');
Route::post('/posts', 'PostsController@store')->middleware('auth');
Route::get('/posts/{post}/edit', 'PostsController@edit')->middleware('auth');
Route::patch('/posts/{post}', 'PostsController@update')->middleware('auth');
Route::delete('/posts/{post}', 'PostsController@destroy')->middleware('auth');
Route::get('/abouts/{post}/edit', 'AboutsController@edit')->middleware('auth');
Route::post('/abouts/{post}/abouts', 'AboutsController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/posts', 'PostsController')->middleware('auth');
