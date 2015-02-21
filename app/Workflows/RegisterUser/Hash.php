<?php namespace App\Workflows\RegisterUser;

use Cerbero\Workflow\Pipes\AbstractPipe;
use Illuminate\Contracts\Hashing\Hasher;

class Hash extends AbstractPipe {

	/**
	 * Run before the command is handled.
	 *
	 * @param	App\Commands\Command	$command
	 * @return	mixed
	 */
	public function before(Hasher $hasher, $command)
	{
		if($hasher->needsRehash($password = $command->password))
		{
			$command->password = $hasher->make($password);
		}
	}

}