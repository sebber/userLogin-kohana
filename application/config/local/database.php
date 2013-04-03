<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'default' => array (
	    'type'       => 'mysql',
	    'connection' => array(
	        'hostname'   => 'localhost',
	        'database'   => 'kohanalogin',
	        'username'   => 'root',
	        'password'   => 'root',
	        'persistent' => FALSE,
	    ),
	    'table_prefix' => '',
	    'charset'      => 'utf8',
	    'caching'      => FALSE,
	    'profiling'    => TRUE,
	),
);