<?php

use Workflows\Registration\RegistrationInterface;

class RegistrationController extends \BaseController {

	/**
	 * @author	Andrea Marco Sartori
	 * @var		Workflows\Registration\RegistrationInterface	$registration	Registration workflow.
	 */
	protected $registration;
	
	/**
	 * Set the dependencies.
	 *
	 * @author	Andrea Marco Sartori
	 * @param	Workflows\Registration\RegistrationInterface	$registration
	 * @return	void
	 */
	public function __construct(RegistrationInterface $registration)
	{
		$this->registration = $registration;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('register');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->registration->register(Input::all());

		return Redirect::route('login.index');
	}


}
