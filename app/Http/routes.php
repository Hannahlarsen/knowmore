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

// Static pages

Route::get('/', 'HomeController@index');

// Profile pages

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit', 'ProfileController@edit');
Route::patch('/profile/edit', 'ProfileController@update');


// Mail system

Route::get('mails', 'MailController@index');
Route::get('mails/create', 'MailController@create');
Route::get('mails/sent', 'MailController@sent');
Route::get('mails/{id}', 'MailController@show');
Route::get('mails/{id}/reply', 'MailController@reply');
Route::get('mails/{id}/delete', 'MailController@destroy');
Route::get('mails/{id}/delete/sender', 'MailController@destroy_sender');
Route::post('mails/create', 'MailController@send');

// Recoures

Route::resource('news', 'NewsController');
Route::resource('projects', 'ProjectsController');
Route::get('projects/{id}/destroy', 'ProjectsController@destroy');
Route::resource('ability', 'AbilityController');
Route::resource('advisors', 'AdvisorsController');
Route::resource('users', 'UsersController');
Route::get('users/{id}/contact', 'UsersController@contact');

// user auth

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
	]);
