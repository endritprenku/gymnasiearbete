<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	define('ENDRIT_CMS', 1);	
	include_once $_SERVER['DOCUMENT_ROOT'].'/global.php';
	echo'<!DOCTYPE html>
	<html lang="se">
	<head>
	  <meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	  <title>Goalie</title>
	  <meta content="" name="description">
	  <meta content="" name="keywords">
	  <link href="site/assets/img/favicon.png" rel="icon">
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
	  <link href="site/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	  <link href="site/assets/vendor/aos/aos.css" rel="stylesheet">
	  <link href="site/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="site/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	  <link href="site/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="site/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	  <link href="site/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	  <link href="site/assets/css/style.css" rel="stylesheet">
	  <link href="site/assets/css/toastify.css" rel="stylesheet">
	</head>';
	html::page();	
?>