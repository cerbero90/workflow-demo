<?php namespace App\Commands;

use App\User;
use App\Commands\Command;
use Illuminate\Contracts\Bus\SelfHandling;

class RegisterUserCommand extends Command implements SelfHandling {

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($name, $email, $password)
	{
		$this->name     = $name;
		$this->email    = $email;
		$this->password = $password;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle(User $user)
	{
		return $user->create((array) $this);
	}

}
