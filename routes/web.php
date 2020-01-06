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
Route::group(['middleware' => 'auth'],function(){
    Route::get('/', 'PostController@index');
    Route::get('/home', 'PostController@index');
    Route::get('/posts', 'PostController@index')->name('posts.index');
    Route::get('posts/create', 'PostController@create');
    Route::post('/posts', 'PostController@store');
    Route::get('/posts/{post}', 'PostController@show')->name('posts.show');
    Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
    Route::put('/posts/{posts}', 'PostController@update');
    Route::DELETE('/posts/{posts}', 'PostController@destroy');
});
Auth::routes();

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback'); 

Route::get('/redirect', 'Auth\LoginController@redirectToProviderGoogle');
Route::get('/callback', 'Auth\LoginController@handleProviderCallbackGoogle');
