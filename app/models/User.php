<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * @author	Andrea Marco Sartori
	 * @var		array	$fillable	Mass-assignable properties.
	 */
	protected $fillable = array('name', 'email', 'password');

	/**
	 * @author	Andrea Marco Sartori
	 * @var		array	$dates	Custom dates to include.
	 */
	protected $dates = array('last_login');

	/**
	 * Name setter.
	 *
	 * @author	Andrea Marco Sartori
	 * @param	string	$value
	 * @return	void
	 */
	public function setNameAttribute($value)
	{
		$this->attributes['name'] = ucfirst($value);
	}

}
