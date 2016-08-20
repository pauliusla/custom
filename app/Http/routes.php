<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' =>'welcome', 'uses' => 'PagesController@getIndex']);
Route::get('/user/posts', ['as' =>'userp', 'uses' => 'PagesController@getUserp']);
Route::get('login', ['as' =>'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', ['as' => 'logout', 'uses'=>'Auth\AuthController@getLogout']);

Route::get('register', ['as' =>'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('register', 'Auth\AuthController@postRegister');

Route::resource('users', 'UsersController');
Route::resource('posts', 'PostsController');
Route::get('/create', ['as' =>'create', 'uses' => 'PostsController@create']);