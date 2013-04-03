<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Account extends Controller_Application {

	public function action_index()
	{
		$this->content = 'hello account!';
	}

}