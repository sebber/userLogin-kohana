<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Application extends Controller {

	protected $content = '';

	public function before()
	{
		parent::before();
	}

	public function after()
	{
		$template = new View_Application();
		$template->content($this->content);

		$this->response->body($template->render());

		parent::after();
	}

}