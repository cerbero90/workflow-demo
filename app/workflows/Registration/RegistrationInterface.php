<?php namespace Workflows\Registration;

/**
 * Workflow interface.
 *
 */
interface RegistrationInterface
{

	/**
	 * Trigger the registration workflow.
	 *
	 * @param	$data
	 */
	public function register($data = null);

}