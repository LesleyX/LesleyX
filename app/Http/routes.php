<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'uses'	=>	'\LesleyX\Http\Controllers\HomeController@index',
	'as'	=>	'index'
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

Route::group(['middleware' => ['web']], function () {
    //
});
