<?php

/**
 * Show errors to the user.
 *
 * @author	Andrea Marco Sartori
 */
class DisplayableException extends Exception
{

	/**
	 * Set the message.
	 *
	 * @author	Andrea Marco Sartori
	 * @param	string	$message
	 * @return	void
	 */
	public function __construct($message)
	{
		parent::__construct($message);
	}

}