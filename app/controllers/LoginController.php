<?php

class LoginController extends \BaseController {

	/**
	 * @author	Andrea Marco Sartori
	 * @var		Workflows\Login\LoginInterface	$login	Login workflow.
	 */
	protected $login;
	
	/**
	 * Set the dependencies.
	 *
	 * @author	Andrea Marco Sartori
	 * @param	Workflows\Login\LoginInterface	$login
	 * @return	void
	 */
	public function __construct(Workflows\Login\LoginInterface $login)
	{
		$this->login = $login;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('login');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->login->login(Input::only('email', 'password'));

		return Redirect::home();
	}


}
