<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::home();
	}

}
