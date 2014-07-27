<?php namespace Workflows\Login;

use \Auth, \DisplayableException;

/**
 * Main workflow class.
 *
 */
class Login implements LoginInterface
{

	/**
	 * Trigger the workflow.
	 *
	 * @param	$data
	 */
	public function login($data = null)
	{
		if( ! Auth::attempt($data))
		{
			throw new DisplayableException('Wrong credentials, check your input.');
		}
	}

}