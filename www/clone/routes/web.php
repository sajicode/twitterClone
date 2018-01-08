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

Route::get('/details/{id}', 'PostsController@details');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts', 'PostsController@showPosts');

Route::post('/posts/{id}/comments', 'CommentsController@store');

Route::get('/reister', 'RegistrationController@create');

Route::get('/login', 'SessionsController@create');
