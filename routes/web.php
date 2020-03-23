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
Route::get('/posts/{post}', 'PostsController@show')->where('post','[0-9]+');
Route::get('/posts/create', 'PostsController@create')->middleware('auth');
Route::post('/posts', 'PostsController@store')->middleware('auth');
Route::get('/posts/{post}/edit', 'PostsController@edit')->middleware('auth');
Route::patch('/posts/{post}', 'PostsController@update')->middleware('auth');
Route::delete('/posts/{post}', 'PostsController@destroy')->middleware('auth');

// ABOUT
Route::get('/abouts/{post}/create', 'AboutsController@create')->middleware('auth');
Route::get('/abouts/{post}/edit', 'AboutsController@edit')->middleware('auth');
Route::post('/abouts/{post}/abouts', 'AboutsController@store')->middleware('auth');
Route::patch('/abouts/{about}', 'AboutsController@update')->middleware('auth');

// WORK
Route::get('/works/{post}', 'WorksController@index')->middleware('auth');
Route::get('/works/{post}/create', 'WorksController@create')->middleware('auth');
Route::post('/works/{post}', 'WorksController@store')->middleware('auth');
Route::get('/works/{work}/edit/', 'WorksController@edit')->middleware('auth');
Route::patch('/works/{work}', 'WorksController@update')->middleware('auth');
Route::delete('/works/{work}', 'WorksController@destroy')->middleware('auth');



Route::get('/abouts', 'AboutsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// CONTACT
Route::post('/contact/{post}/send', 'ContactController@send')->name('contact.send');
Route::get('/contact/result', 'ContactController@result')->name('contact.result');

Route::group(['middleware' => 'basicauth'], function() {
  //Basic認証
  Route::get('/', 'PostsController@index');
});

