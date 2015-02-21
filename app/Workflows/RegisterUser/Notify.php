<?php namespace App\Workflows\RegisterUser;

use Cerbero\Workflow\Pipes\AbstractPipe;

class Notify extends AbstractPipe {

	/**
	 * Run before the command is handled.
	 *
	 * @param	App\Commands\Command	$command
	 * @return	mixed
	 */
	public function before($command)
	{
		//
	}

	/**
	 * Run after the handled command.
	 *
	 * @param	mixed	$handled
	 * @param	App\Commands\Command	$command
	 * @return	mixed
	 */
	public function after($handled, $command)
	{
		//
	}

}