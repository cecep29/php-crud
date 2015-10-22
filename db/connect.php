<?php

	$host = "xxx";// nama host
	$user = "xxx";//nama user
	$pass = "xxx";//passsword
	$db_name = "xxx";//nama database

	$connect = mysqli_connect($host, $user, $pass, $db_name) or 
	die(mysqli_error($connect));

 ?>