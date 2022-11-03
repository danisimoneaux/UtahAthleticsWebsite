<?php

//Example 12-2

$username = 'admin';
$password = 'letmein';

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
	
	//Get values from SERVER
	$tmp_username = $_SERVER['PHP_AUTH_USER'];//$_SERVER is the array object from the browser
	$tmp_password = $_SERVER['PHP_AUTH_PW'];
	
	//Validation
	if($tmp_username == $username && $tmp_password == $password)
	{
		echo "You are now logged in.";
	}else die("invalid username password combination.");
	
}else{
	header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
	die('Please enter your username and password');
}

?>