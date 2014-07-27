<?php namespace Workflows\Registration;

use User;

/**
 * Main workflow class.
 *
 */
class Registration implements RegistrationInterface
{

	/**
	 * Trigger the workflow.
	 *
	 * @param	$data
	 */
	public function register($data = null)
	{
		return User::create($data);
	}

}