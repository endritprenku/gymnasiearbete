<?php
	session_destroy();
	$_SESSION = array();
	header('Location: '.$config['url'].'/index');
?>