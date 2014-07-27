<?php namespace Workflows\Login\Decorators;

use Workflows\Login\LoginInterface;
use \User;

/**
 * Decorator of the login workflow.
 *
 */
class LastLogin implements LoginInterface
{

	/**
	 * @var		LoginInterface	$login	Login implementation.
	 */
	protected $login;
	
	/**
	 * Set the dependencies.
	 *
	 * @param	LoginInterface	$login
	 * @return	void
	 */
	public function __construct(LoginInterface $login)
	{
		$this->login = $login;
	}

	/**
	 * Trigger the login workflow.
	 *
	 * @param	$data
	 */
	public function login($data = null)
	{
		$this->login->login($data);

		User::whereEmail($data['email'])->update(['last_login' => time()]);
	}

}