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

Route::get('/', 'StaticPagesController@home');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/help', 'StaticPagesController@help')->name('help');

Route::get('signup', 'UsersController@create')->name('signup');
resource('users', 'UsersController');

Route::get('login', 'SessionController@create')->name('login');
Route::post('login', 'SessionController@store')->name('login');
Route::delete('logout', 'SessionController@destroy')->name('logout');

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

Route::get('password/email', 'Auth\PasswordController@getEmail')->name('password.reset');
Route::post('password/email', 'Auth\PasswordController@postEmail')->name('password.reset');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset')->name('password.edit');
Route::post('password/reset', 'Auth\PasswordController@postReset')->name('password.update');

resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);