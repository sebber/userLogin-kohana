<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Home extends Controller_Application {

	public function action_index()
	{
		$this->content = View::factory('home/index');
	}

}