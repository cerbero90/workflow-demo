<?php namespace Workflows\Login;

/**
 * Workflow interface.
 *
 */
interface LoginInterface
{

	/**
	 * Trigger the login workflow.
	 *
	 * @param	$data
	 */
	public function login($data = null);

}