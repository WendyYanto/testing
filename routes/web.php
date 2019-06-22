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

Route::get('/posts', 'PostController@getAll');
Route::get('/bebas', 'PostController@createPost');
Route::post('/insertPost', 'PostController@insertPost');
Route::delete('/deletePost/{id}', 'PostController@deletePost');
Route::get('/post/{id}', 'PostController@getPost');
Route::patch('/post/update/{id}', 'PostController@updatePost');