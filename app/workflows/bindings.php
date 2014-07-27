<?php

// Bind the [Registration] workflow
App::bind('Workflows\Registration\RegistrationInterface', function($app)
{
	return new Workflows\Registration\Decorators\Validator
	(
		new Workflows\Registration\Decorators\Notifier
		(
			new Workflows\Registration\Registration
		)
	);
});

// Bind the [Login] workflow
App::bind('Workflows\Login\LoginInterface', function($app)
{
	return new Workflows\Login\Decorators\LastLogin
	(
		new Workflows\Login\Login
	);
});