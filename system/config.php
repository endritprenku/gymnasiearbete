<?php
	if(!defined('ENDRIT_CMS')) { 
    die('Sorry but you cannot access this file!'); }
	
/******************************************** DATABASE SETTINGS *******************************************************/

	$db['host'] = '127.0.0.1'; //Mysql's Host
	$db['port'] = '3306'; //Mysql's port
	$db['user'] = 'root'; //Mysql's user
	$db['pass'] = ''; //Mysql's password
	$db['db'] =   'gymnasiearbete'; //Mysql's database

/******************************************** WEBSITE SETTINGS *******************************************************/

	$config['url'] = "http://localhost:8080"; //Address of your website. Does not end with a "/"
	$config['maintenance'] = false; //Maintenance
?>