<?php
	if(!defined('ENDRIT_CMS'))
{
    die('Sorry but you cannot access this file!'); }
	
	session_start();
	ob_start();
	error_reporting(E_ALL);
	define('Z', $_SERVER['DOCUMENT_ROOT'].'/');
	define('A', Z . 'system/');
	define('C', 'core/');
	define('H', 'site/');
	require_once A . '/config.php';
	foreach (glob(A . C . '/*.php') as $className)
	{
		require_once $className;
	}
	
	
	
	
	
	
