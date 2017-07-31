<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/', 'PostsController@index')->name('home');
Route::get('/p/ucphoto/{post}', 'PostsController@show');
Route::get('/p/ucphotos/create', 'PostsController@create');
Route::post('/p/ucphotos/create', 'PostsController@store');
Route::delete('/p/ucphoto/{post}/delete', 'PostsController@delete');

Route::get('/c/{category}', 'PostsController@category');

/* API Routes */
Route::post('/p/ucphoto/{post}/comment', 'CommentsController@store')->middleware('auth');
Route::post('/', 'PostsController@getPosts');

Route::get('user/{user}', 'UserController@show')->name('user');
Route::put('user/{user}/edit', 'UserController@edit');

Route::put('/p/ucphoto/{post}/votes', 'VotesController@edit');

Auth::routes();
