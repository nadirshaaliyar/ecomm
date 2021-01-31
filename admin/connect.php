<?php

	$dsn = 'mysql:host=remotemysql.com;dbname=6hyGHwUyVa';
	$user = '6hyGHwUyVa';
	$pass = 'cXNhDVlIdp';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	);

	try {
		$con = new PDO($dsn, $user, $pass, $option);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	catch(PDOException $e) {
		echo 'Failed To Connect' . $e->getMessage();
	}