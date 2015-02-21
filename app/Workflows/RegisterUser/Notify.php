<?php namespace App\Workflows\RegisterUser;

use Cerbero\Workflow\Pipes\AbstractPipe;
use Illuminate\Contracts\Mail\Mailer;

class Notify extends AbstractPipe {

	/**
	 * Run after the handled command.
	 *
	 * @param	mixed	$handled
	 * @param	App\Commands\Command	$command
	 * @return	mixed
	 */
	public function after(Mailer $mailer, $handled, $command)
	{
		$mailer->send('emails.registration', ['id' => $handled->id], function($message) use($command)
		{
			$message->to($command->email, $command->name)->subject('Welcome!');
		});
	}

}