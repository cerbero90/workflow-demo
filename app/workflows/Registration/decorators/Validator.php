<?php namespace Workflows\Registration\Decorators;

use Workflows\Registration\RegistrationInterface;
use Cerbero\Workflow\Validation\AbstractValidator;

/**
 * Decorator of the registration workflow.
 *
 */
class Validator extends AbstractValidator implements RegistrationInterface
{

	/**
	 * @var		RegistrationInterface	$registration	Registration implementation.
	 */
	protected $registration;
	
	/**
	 * Set the dependencies.
	 *
	 * @param	RegistrationInterface	$registration
	 * @return	void
	 */
	public function __construct(RegistrationInterface $registration)
	{
		$this->registration = $registration;
	}

	/**
	 * Trigger the registration workflow.
	 *
	 * @param	$data
	 */
	public function register($data = null)
	{
		$this->validate($data);

		$this->registration->register($data);
	}

	/**
	 * Retrieve the rules to apply.
	 *
	 * @author	Andrea Marco Sartori
	 * @return	array
	 */
	protected function getRules()
	{
		return [
			'name' => 'required|alpha|min:3',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6|confirmed',
		];
	}

}