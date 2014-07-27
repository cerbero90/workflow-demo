<?php namespace Workflows\Registration\Decorators;

use Workflows\Registration\RegistrationInterface;
use Mail;

/**
 * Decorator of the registration workflow.
 *
 */
class Notifier implements RegistrationInterface
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
		$user = $this->registration->register($data);

		Mail::send('emails.welcome', $data, function($message) use($user)
		{
			$message->to($user->email, $user->name)->subject('Welcome!');
		});
	}

}