<?php defined('SYSPATH') OR die('No direct script access.');

class View_Application {

	private $_content = '';

	public function content($content = null)
	{
		if($content !== null)
			$this->_content = $content;

		return $this->_content;
	}

	public function __toString()
	{
		return View::factory('application')->bind('view', $this)->render();
	}

}