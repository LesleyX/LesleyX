<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('/', [
'uses'  =>  '\LesleyX\Http\Controllers\HomeController@index',
'as'    =>  'index'
]);

/**
 *  Authentication routes
 */
Route::get('/auth/register', [
    'uses' => '\LesleyX\Http\Controllers\AuthController@getRegister',
    'as'   => 'auth.register',
    'middleware' => ['guest']
]);
 
Route::post('/auth/register', [
    'uses' => '\LesleyX\Http\Controllers\AuthController@postRegister',
    'middleware' => ['guest']
]);
 
Route::get('/auth/signin', [
    'uses' => '\LesleyX\Http\Controllers\AuthController@getLogin',
    'as'   => 'auth.login',
    'middleware' => ['guest']
]);
 
Route::post('/auth/signin', [
    'uses' => '\LesleyX\Http\Controllers\AuthController@postLogIn',
    'middleware' => ['guest']
]);

Route::get('/logout', [
    'uses'  =>  '\LesleyX\Http\Controllers\AuthController@logout',
    'as'    =>  'auth.logout'
]);

Route::resource('projects', 'ProjectsController');

