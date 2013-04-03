<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Account extends Controller_Application {

	public function action_index()
	{
		$this->content = 'hello account!';
	}


	public function action_login()
	{
		$this->content = View::factory('account/login');
	}

	public function action_roles()
	{
		$roles = DB::select()->from('roles')->execute();

		$this->content = View::factory('account/roles')->bind('roles', $roles);
	}

}