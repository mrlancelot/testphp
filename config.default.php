<?php defined('IN_CMS') or die('No direct access allowed.');

/*
	TestCMS - Default configuration
*/
return array(
	//  MySQL database details
	'database' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'name' => 'testcms'
	),
	
	// Application settings
	'application' => array(
		// url paths
		'base_url' => '/',
		'index_page' => 'index.php',

		// your time zone
		'timezone' => 'UTC',

		// access to admin
		'admin_folder' => 'admin',

		// your unique application key used for signing passwords
		'key' => ''
	),
	
	// Session details
	'session' => array(
		'name' => 'testcms',
		'expire' => 3600,
		'path' => '/',
		'domain' => ''
	),

	// Error handling
	'error' => array(
		'ignore' => array(E_NOTICE, E_USER_NOTICE, E_DEPRECATED, E_USER_DEPRECATED),
		'detail' => false,
		'log' => false
	),

	// Show database profile
	'debug' => false
);
