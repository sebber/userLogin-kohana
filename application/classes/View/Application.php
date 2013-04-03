<?php defined('SYSPATH') OR die('No direct script access.');

class View_Application {

	private $_content = '';


	public function title()
	{
		return 'Kohana Login-Example';
	}

	public function content($content = null)
	{
		if($content !== null)
			$this->_content = $content;

		return $this->_content;
	}


	public function stylesheets()
	{
		return array(
			HTML::style('/public/css/bootstrap.min.css'),
			HTML::style('/public/css/bootstrap-responsive.min.css'),
			HTML::style('/public/css/main.css'),
		);
	}

	public function javascripts()
	{
		return array(
			HTML::script('http://code.jquery.com/jquery-git2.js'),
			HTML::script('/public/js/bootstrap.min.js'),
		);
	}

	
	public function render()
	{
		return $this->__toString();
	}

	public function __toString()
	{
		return View::factory('application')->bind('view', $this)->render();
	}



}