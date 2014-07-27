<?php

Route::when('*', 'csrf', 'post');


Route::get('/', ['as' => 'home', 'uses' => 'HomeController@showWelcome']);


Route::group(['before' => 'guest'], function()
{
	Route::resource('register', 'RegistrationController', ['only' => ['index', 'store']]);

	Route::resource('login', 'LoginController', ['only' => ['index', 'store']]);
});


Route::get('logout', ['before' => 'auth', 'as' => 'logout', 'uses' => 'HomeController@logout']);